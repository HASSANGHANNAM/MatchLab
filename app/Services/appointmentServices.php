<?php

namespace App\Services;

use App\Models\LabWorkingHour;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Throwable;

class appointmentServices
{
    public function setLabSchedules(array $schedules, int $labId): array
    {
        return DB::transaction(function () use ($schedules, $labId) {
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
                'schedules' => LabWorkingHour::where('lab_id', $labId)->get(),
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

        public function bookAppointment(array $data): Appointment
    {
        if (!Auth::user() || !Auth::user()->hasRole('Patient')) {
            throw new \Exception('غير مصرح لك بحجز الموعد.');
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
                throw new \Exception('هذا الوقت خارج أوقات عمل المختبر.');
            }

            $startHour = $appointmentDateTime->copy()->startOfHour();
            $endHour = $appointmentDateTime->copy()->addHour();

            $appointmentsCount = Appointment::where('lab_id', $labId)
                ->whereBetween('date_time', [$startHour, $endHour])
                ->count();

            if ($appointmentsCount > $workingHour->patients_per_hour) {
                throw new \Exception('تم حجز العدد الأقصى من المرضى لهذه الساعة.');
            }

            return Appointment::create([
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

