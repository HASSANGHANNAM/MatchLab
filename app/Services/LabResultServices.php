<?php

namespace App\Services;

use App\Models\AppointmentLabHaveAnalys;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LabResultServices
{
    public function addResult(array $data): array
    {
        if (!Auth::user() || !Auth::user()->hasRole('LabOwner')) {
            return ['message' => 'غير مصرح لك بإدخال النتائج.', 'user' => null];
        }
        return DB::transaction(function () use ($data) {
            $appointmentAnalysis = AppointmentLabHaveAnalys::where('appointment_id', $data['appointment_id'])
                ->where('lab_analys_id', $data['lab_analys_id'])
                ->first();
            // dd($appointmentAnalysis);
            if (!$appointmentAnalysis) {
                return ['message' => 'لم يتم العثور على التحليل لهذا الحجز.', 'user' => null];
            }
            $appointmentAnalysis->update(['result' => $data['result']]);
            return ['message' => 'تم إدخال النتيجة بنجاح!', 'user' => $appointmentAnalysis];
        });
    }
}
