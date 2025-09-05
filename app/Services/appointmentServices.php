<?php

namespace App\Services;

use App\Models\LabWorkingHour;
use App\Models\Appointment;
use App\Models\lab_have_analyses;
use App\Models\abAnalysis;
use App\Models\AppointmentLabHaveAnalys;
use App\Services\NotificationService;
use App\Models\Lab;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Throwable;

class appointmentServices
{
    protected $stripeService;
    protected $notificationService;

    public function __construct(StripeService $stripeService, NotificationService $notificationService)
    {
        $this->stripeService = $stripeService;
        $this->notificationService = $notificationService;
    }
    public function setLabSchedules(array $schedules,): array
    {
        return DB::transaction(function () use ($schedules) {

            $user = auth()->user();
            if (!$user->LabOwner || !$user->LabOwner->lab) {
                return [
                    'data' => [],
                    'message' => 'هذا المستخدم ليس صاحب مختبر.',
                    'code' => 403
                ];
            }

            $labId = $user->LabOwner->lab->id;
            LabWorkingHour::where('lab_id', $labId)->delete();
            foreach ($schedules as $schedule) {
                LabWorkingHour::create([
                    'lab_id' => $labId,
                    'day_of_week' => ucfirst(strtolower($schedule['day_of_week'])),
                    'start_time' => $schedule['start_time'],
                    'end_time' => $schedule['end_time'],
                    'patients_per_hour' => $schedule['patients_per_hour'],
                ]);
            }
            return [
                'message' => 'تم حفظ جدول دوام المختبر بنجاح!',
                'data' => LabWorkingHour::where('lab_id', $labId)->get(),
                'code' => 200
            ];
        });
    }

    public function getAvailableAppointments(int $labId): array
    {
        $lab = Lab::find($labId);
        if ($lab == null) {
            return [];
        }
        $availableSlots = [];
        $now = Carbon::now();
        $days = 3;

        $workingHours = LabWorkingHour::where('lab_id', $labId)->get();

        for ($i = 0; $i <= $days; $i++) {
            $date = $now->copy()->addDays($i);
            $dayOfWeek = $date->format('l');

            $dayWorkingHours = $workingHours->where('day_of_week', $dayOfWeek);

            foreach ($dayWorkingHours as $wh) {
                $start = Carbon::parse($date->format('Y-m-d') . ' ' . $wh->start_time);
                $end = Carbon::parse($date->format('Y-m-d') . ' ' . $wh->end_time);

                while ($start < $end) {
                    $appointmentsCount = Appointment::where('lab_id', $labId)
                        ->whereBetween('date_time', [$start, $start->copy()->addHour()])
                        ->count();

                    if ($appointmentsCount < $wh->patients_per_hour) {
                        $availableSlots[] = [
                            'date_time' => $start->toDateTimeString(),
                            'type_options' => ['IN_LAB', 'IN_HOME'],
                        ];
                    }

                    $start->addHour();
                }
            }
        }
        if (empty($availableSlots))
            return ["dont have"];
        return $availableSlots;
    }

    public function bookAppointment(array $data): array
    {
        if (!Auth::user() || !Auth::user()->hasRole('Patient')) {
            return [
                'message' => 'غير مصرح لك بحجز الموعد.',
                'user' => null
            ];
        }
        return DB::transaction(function () use ($data) {
            $labId = $data['lab_id'];
            $appointmentDateTime = Carbon::parse($data['date_time']);

            if ($appointmentDateTime->lessThanOrEqualTo(Carbon::now())) {
                return [
                    'message' => 'لا يمكن حجز موعد في وقت مضى.',
                    'user' => null
                ];
            }
            $dayOfWeek = $appointmentDateTime->format('l');
            $appointmentTime = $appointmentDateTime->format('H:i:s');
            $patient = DB::table('patients')
                ->where('user_id', Auth::user()->id)
                ->first();
            $data['patient_id'] = $patient->id;
            $lab = DB::table('labs')->where('id', $labId)->first();
            $workingHour = LabWorkingHour::where('lab_id', $labId)
                ->where('day_of_week', $dayOfWeek)
                ->where('start_time', '<=', $appointmentTime)
                ->where('end_time', '>', $appointmentTime)
                ->first();
            if (!$workingHour) {
                return [
                    'message' => 'هذا الوقت خارج أوقات عمل المختبر.',
                    'user' => null
                ];
            }

            $startHour = $appointmentDateTime->copy()->startOfHour();
            $endHour = $appointmentDateTime->copy()->addHour();
            $appointmentsCount = Appointment::where('lab_id', $labId)
                ->whereBetween('date_time', [$startHour, $endHour])
                ->count();
            if ($appointmentsCount >= $workingHour->patients_per_hour) {
                return ['message' => 'تم حجز العدد الأقصى من المرضى لهذه الساعة.', 'user' => null];
            }

            if (empty($data['analyses']) || !is_array($data['analyses'])) {
                return ['message' => 'يجب اختيار التحاليل المطلوبة.', 'user' => null];
            }
            $price = 0;
            foreach ($data['analyses'] as $analysisId) {
                $exists = lab_have_analyses::where('lab_id', $labId)
                    ->where('lab_analys_id', $analysisId)
                    ->exists();
                if (!$exists) {
                    return ['message' => "التحليل رقم {$analysisId} غير متوفر في هذا المختبر.", 'user' => null];
                }
                $analysis =  DB::table('lab_analyses')->where('id', $analysisId)->first();
                $price += $analysis->global_price * $lab->price_of_global_unit;
            }
            // start stripe
            $user =  DB::table('users')->where('id', Auth::id())->first();
            $labUser = DB::table('lab_owners')
                ->where('lab_owners.lab_id', $labId)
                ->join('users', 'users.id', '=', 'lab_owners.user_id')
                ->select('users.*')
                ->first();
            $payment = $this->stripeService->transactionAmount($user->stripe_account_id, $labUser->stripe_account_id, $price);
            if ($payment['code'] != 200) {
                return ['message' => 'fail appointment because ' . $payment['message'], 'user' => null];
            }
            // end stripe
            $appointment = Appointment::create([
                'type' => $data['type'],
                'patient_name' => $data['patient_name'],
                'patient_phone' => $data['patient_phone'],
                'patient_id_number' => $data['patient_id_number'],
                'patient_id' => $data['patient_id'],
                'longitude' => $data['longitude'] ?? null,
                'latitude' => $data['latitude'] ?? null,
                'lab_id' => $labId,
                'location_id' => $data['location_id'] ?? null,
                'status' => 'pending',
                'date_time' => $appointmentDateTime,
                'total_Price' => $price
            ]);
            foreach ($data['analyses'] as $analysisId) {
                $labHaveAnalysis = lab_have_analyses::where('lab_id', $labId)
                    ->where('lab_analys_id', $analysisId)
                    ->first();
                AppointmentLabHaveAnalys::create([
                    'appointment_id' => $appointment->id,
                    'lab_analys_id' => $analysisId,
                    'result' => null
                ]);
            }
            //notification
            $this->notificationService->send(
                Auth::user(),
                "تم حجز موعدك بنجاح",
                "موعدك بتاريخ {$appointment->date_time} في المختبر {$appointment->lab->name}"
            );

            return ['message' => 'Appointment booked successfully!', 'user' => $appointment->load('lab', 'lab.location')];
        });
    }

    public function getLabAppointments(): array
    {
        $user = auth()->user();
        if (!$user->LabOwner || !$user->LabOwner->lab) {
            throw new \Exception('هذا المستخدم ليس صاحب مختبر.');
        }
        $labId = $user->LabOwner->lab->id;

        $appointments = Appointment::with('patient')
            ->where('lab_id', $labId)
            ->orderBy('date_time', 'desc')
            ->get();

        $message = $appointments->isEmpty()
            ? 'لا توجد حجوزات حالياً.'
            : 'تم جلب قائمة الحجوزات بنجاح.';

        return [
            'data' => $appointments,
            'message' => $message,
            'code' => 200,
        ];
    }
    public function updateAppointmentStatus(int $appointmentId, string $status): array
    {
        $appointment = Appointment::findOrFail($appointmentId);

        $appointment->status = $status;
        $appointment->save();

        //notification
        $this->notificationService->send(
            $appointment->patient->user,
            "تم تحديث حالة موعدك",
            "موعدك أصبح الآن: {$status}",
            'appointment_status'
        );

        return [
            'data' => $appointment,
            'message' => 'تم تحديث حالة الحجز بنجاح.',
            'code' => 200,
        ];
    }
    public function updateAppointment(int $appointmentId, array $data): array
    {
        $user = auth()->user();

        if (!$user || !$user->hasRole('Patient')) {
            return [
                'status' => 0,
                'data' => null,
                'message' => 'غير مصرح لك بتحديث الموعد.'
            ];
        }

        $patientId = $user->patient->id;
        if (!$patientId) {
            return [
                'status' => 0,
                'data' => null,
                'message' => 'لا يوجد سجل مريض مرتبط بهذا المستخدم.'
            ];
        }

        $appointment = Appointment::where('id', $appointmentId)
            ->where('patient_id', $patientId)
            ->first();

        if (!$appointment) {
            return [
                'status' => 0,
                'data' => null,
                'message' => 'الموعد غير موجود.'
            ];
        }

        return DB::transaction(function () use ($appointment, $data, $patientId) {
            $labId = $data['lab_id'] ?? $appointment->lab_id;
            $lab = DB::table('labs')->where('id', $labId)->first();
            $appointmentDateTime = isset($data['date_time']) ? Carbon::parse($data['date_time']) : null;
            if ($appointmentDateTime != null && $appointmentDateTime->lt(now())) {
                return [
                    'status' => 0,
                    'data' => null,
                    'message' => 'لا يمكن حجز موعد بتاريخ مضى.'
                ];
            }
            if ($appointmentDateTime != null) {
                $dayOfWeek = $appointmentDateTime->format('l');
                $appointmentTime = $appointmentDateTime->format('H:i:s');

                $workingHour = LabWorkingHour::where('lab_id', $labId)
                    ->where('day_of_week', $dayOfWeek)
                    ->where('start_time', '<=', $appointmentTime)
                    ->where('end_time', '>', $appointmentTime)
                    ->first();

                if (!$workingHour) {
                    return [
                        'status' => 0,
                        'data' => null,
                        'message' => 'هذا الوقت خارج أوقات عمل المختبر.'
                    ];
                }
                $startHour = $appointmentDateTime->copy()->startOfHour();
                $endHour = $appointmentDateTime->copy()->addHour();
                $appointmentsCount = Appointment::where('lab_id', $labId)
                    ->whereBetween('date_time', [$startHour, $endHour])
                    ->where('id', '!=', $appointment->id)
                    ->count();

                if ($appointmentsCount >= $workingHour->patients_per_hour) {
                    return [
                        'status' => 0,
                        'data' => null,
                        'message' => 'تم حجز العدد الأقصى من المرضى لهذه الساعة.'
                    ];
                }
            } else {
                $appointmentDateTime = $appointment->date_time;
            }

            $price = 0;
            if (!empty($data['analyses']) && is_array($data['analyses'])) {
                foreach ($data['analyses'] as $analysisId) {
                    $exists = lab_have_analyses::where('lab_id', $labId)
                        ->where('lab_analys_id', $analysisId)
                        ->exists();
                    if (!$exists) {
                        return [
                            'status' => 0,
                            'data' => null,
                            'message' => "التحليل رقم {$analysisId} غير متوفر في هذا المختبر."
                        ];
                    }
                    $analysis =  DB::table('lab_analyses')->where('id', $analysisId)->first();
                    $price += $analysis->global_price * $lab->price_of_global_unit;
                }
            }

            // start stripe
            $user =  DB::table('users')->where('id', Auth::id())->first();
            $labUser = DB::table('lab_owners')
                ->where('lab_owners.lab_id', $labId)
                ->join('users', 'users.id', '=', 'lab_owners.user_id')
                ->select('users.*')
                ->first();
            $pricenew = $price - $appointment->total_Price;
            if ($pricenew != 0) {
                if ($pricenew < 0)
                    $payment = $this->stripeService->transactionAmount($labUser->stripe_account_id, $user->stripe_account_id, $pricenew);
                else
                    $payment = $this->stripeService->transactionAmount($user->stripe_account_id, $labUser->stripe_account_id, $pricenew);
                if ($payment['code'] != 200) {
                    return ['message' => 'fail appointment because ' . $payment['message'], 'data' => null];
                }
            }

            // end stripe
            $appointment->update([
                'type' => $data['type'] ?? $appointment->type,
                'patient_name' => $data['patient_name'] ?? $appointment->patient_name,
                'patient_phone' => $data['patient_phone'] ?? $appointment->patient_phone,
                'patient_id_number' => $data['patient_id_number'] ?? $appointment->patient_id_number,
                'patient_id' => $patientId,
                'longitude' => $data['longitude'] ??  $appointment->longitude,
                'latitude' => $data['latitude'] ??  $appointment->latitude,
                'lab_id' => $labId,
                'total_Price' => $pricenew,
                'location_id' => $data['location_id'] ?? $appointment->location_id,
                'date_time' => $appointmentDateTime,
            ]);


            if (!empty($data['analyses']) && is_array($data['analyses'])) {

                AppointmentLabHaveAnalys::where('appointment_id', $appointment->id)->delete();


                foreach ($data['analyses'] as $analysisId) {

                    // $labHaveAnalysis = lab_have_analyses::where('lab_id', $labId)
                    //     ->where('lab_analys_id', $analysisId)
                    //     ->first();

                    AppointmentLabHaveAnalys::create([
                        'appointment_id' => $appointment->id,
                        'lab_analys_id' => $analysisId,
                        'result' => null
                    ]);
                }
            }
            //notification
            $this->notificationService->send(
                Auth::user(),
                "تم تعديل موعدك",
                "موعدك الجديد بتاريخ {$appointment->date_time}"
            );

            return [
                'status' => 1,
                'data' => $appointment->load('lab', 'lab.location'),
                'message' => 'تم تحديث الموعد بنجاح!'
            ];
        });
    }


    public function deleteAppointment(int $appointmentId): array
    {
        $user = Auth::user();

        if (!$user || !$user->hasRole('Patient')) {
            return [
                'status' => 0,
                'data' => null,
                'message' => 'غير مصرح لك بحذف الموعد.'
            ];
        }
        $patientId = $user->patient->id ?? null;
        if (!$patientId) {
            return [
                'status' => 0,
                'data' => null,
                'message' => 'المستخدم الحالي ليس له سجل مريض.'
            ];
        }

        $appointment = Appointment::where('id', $appointmentId)
            ->where('patient_id', $patientId)
            ->first();

        if (!$appointment) {
            return [
                'status' => 0,
                'data' => null,
                'message' => 'الموعد غير موجود.'
            ];
        }

        $labId = $data['lab_id'] ?? $appointment->lab_id;
        // start stripe
        $user =  DB::table('users')->where('id', Auth::id())->first();
        $labUser = DB::table('lab_owners')
            ->where('lab_owners.lab_id', $labId)
            ->join('users', 'users.id', '=', 'lab_owners.user_id')
            ->select('users.*')
            ->first();
        $now = Carbon::now();
        $diffInHours = $now->diffInHours($appointment->date_time, false);
        if ($diffInHours > 12) {
            $payment = $this->stripeService->transactionAmount($labUser->stripe_account_id, $user->stripe_account_id, $appointment->total_Price);
            if ($payment['code'] != 200) {
                return ['message' => 'fail appointment because ' . $payment['message'], 'user' => null];
            }
        }
        // end stripe
        $appointment->delete();

        //notification
        $this->notificationService->send(
            $user,
            "تم إلغاء موعدك",
            "تم حذف الموعد الذي كان بتاريخ {$appointment->date_time}"
        );

        return [
            'status' => 1,
            'data' => null,
            'message' => 'تم حذف الموعد بنجاح.'
        ];
    }
}
