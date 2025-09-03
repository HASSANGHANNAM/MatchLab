<?php

namespace App\Services;

use App\Models\AppointmentLabHaveAnalys;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Services\NotificationService;

class LabResultServices
{
    protected NotificationService $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function addResult(array $data): array
    {
        if (!Auth::user() || !Auth::user()->hasRole('LabOwner')) {
            return ['message' => 'غير مصرح لك بإدخال النتائج.', 'user' => null];
        }

        return DB::transaction(function () use ($data) {
            $appointmentAnalysis = AppointmentLabHaveAnalys::where('appointment_id', $data['appointment_id'])
                ->where('lab_analys_id', $data['lab_analys_id'])
                ->first();

            if (!$appointmentAnalysis) {
                return ['message' => 'لم يتم العثور على التحليل لهذا الحجز.', 'user' => null];
            }

            $appointmentAnalysis->update(['result' => $data['result']]);

            $appointment = Appointment::with('patient.user')->find($data['appointment_id']);
            $user = $appointment?->patient?->user;

            if ($user) {
                $this->notificationService->send(
                    $user,
                    'نتائج التحليل جاهزة',
                    "تم إدخال نتائج تحاليلك للحجز رقم {$appointment->id}.",
                    'lab_result'
                );
            }

            return [
                'message' => 'تم إدخال النتيجة بنجاح! وتم إرسال إشعار للمريض.',
                'user' => $appointmentAnalysis
            ];
        });
    }
}
