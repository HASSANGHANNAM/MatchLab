<?php

namespace App\Services;

use App\Models\LabWorkingHour;
use App\Models\Appointment;
use App\Models\lab_have_analyses;
use App\Models\abAnalysis;
use App\Models\AppointmentLabHaveAnalys;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Throwable;

class appointmentServices
{
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
                'code'=> 200
            ];
        });
    }

        public function getAvailableAppointments(int $labId): array
    {
        $now = Carbon::now();
        $availableSlots = [];
        $days= 3;

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
        return $availableSlots;
    }

    public function bookAppointment(array $data): array
    {
        if (!Auth::user() || !Auth::user()->hasRole('Patient')) {
            return ['message' => 'غير مصرح لك بحجز الموعد.',
                      'user' => null
                    ];
        }
        return DB::transaction(function () use ($data) {
            $labId = $data['lab_id'];
            $appointmentDateTime = Carbon::parse($data['date_time']);
            $dayOfWeek = $appointmentDateTime->format('l');
            $appointmentTime = $appointmentDateTime->format('H:i:s');

            $workingHour = LabWorkingHour::where('lab_id', $labId)
                ->where('day_of_week', $dayOfWeek)
                ->where('start_time', '<=', $appointmentTime)
                ->where('end_time', '>', $appointmentTime)
                ->first();
            if (!$workingHour) {
                return ['message' => 'هذا الوقت خارج أوقات عمل المختبر.',
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
            foreach ($data['analyses'] as $analysisId) {
                $exists = lab_have_analyses::where('lab_id', $labId)
                    ->where('lab_analys_id', $analysisId)
                    ->exists();
                if (!$exists) {
                    return ['message' => "التحليل رقم {$analysisId} غير متوفر في هذا المختبر.", 'user' => null];
                }
            }

            $appointment = Appointment::create([
                'type' => $data['type'],
                'patient_name' => $data['patient_name'],
                'patient_phone' => $data['patient_phone'],
                'patient_id_number' => $data['patient_id_number'],
                'patient_id' => $data['patient_id'],
                'lab_id' => $labId,
                'location_id' => $data['location_id'] ?? null,
                'status' => 'pending',
                'date_time' => $appointmentDateTime,
            ]);

            foreach ($data['analyses'] as $analysisId) {
                $labHaveAnalysis = lab_have_analyses::where('lab_id', $labId)
                    ->where('lab_analys_id', $analysisId)
                    ->first();
                AppointmentLabHaveAnalys::create([
                    'appointment_id' => $appointment->id,
                    'lab_have_analys_id' => $labHaveAnalysis->id,
                    'result' => null
                ]);
            }

            return ['message' => 'Appointment booked successfully!', 'user' => $appointment->load('lab', 'location')];
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

        return [
            'data' => $appointment,
            'message' => 'تم تحديث حالة الحجز بنجاح.',
            'code' => 200,
        ];
    }






}

