<?php

namespace App\Services;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\lab_have_analyses;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Throwable;

class ArchiveService
{
    /**
     * Get all reservations for the authenticated lab (with patients + analyses + results)
     */
public function getLabArchive(): array
{
    try {
        $lab = Auth::user()->labOwner->lab ?? null;

        if (!$lab) {
            return [
                'data' => null,
                'message' => 'لم يتم العثور على مختبر مرتبط بهذا المستخدم.',
            ];
        }

        $appointments = Appointment::with([
            'patient',
            'analyses.lab_have_analyses.labAnalysis'
        ])->get();

        $archive = $appointments->map(function ($appointment) {
            return [
                'appointment_id' => $appointment->id,
                'date_time' => $appointment->date_time,
                'patient_id' => $appointment->patient->id ?? null,
                'patient_name' => $appointment->patient?->user
                ? $appointment->patient->user->first_name . ' ' . $appointment->patient->user->last_name
                : $appointment->patient_name,
                'patient_phone' => $appointment->patient->phone ?? $appointment->patient_phone,
                'gender' => $appointment->patient->gender ?? null,
                'dob' => $appointment->patient->dob ?? null,
                'analyses' => $appointment->analyses->map(function ($analysis) {
                    $labHaveAnalysis = $analysis->lab_have_analyses;   // العلاقة الوسطية
                    $labAnalysis = $labHaveAnalysis?->labAnalysis;
                    return [
                        'analysis_id' => $labAnalysis?->id,
                        'analysis_name' => $labAnalysis?->lab_analyses_name,
                        'result' => $analysis->result,
                    ];
                }),
            ];
        });

        return [
            'data' => $archive,
            'message' => 'تم جلب أرشيف المختبر بنجاح',
        ];
    } catch (Throwable $th) {
        throw $th;
    }
}




public function getPatientArchive(int $patientId): array
{
    try {
        $labId = Auth::user()->labOwner->lab->id ?? null;

        if (!$labId) {
            return [
                'status' => 0,
                'data'   => [],
                'message'=> 'لم يتم العثور على مختبر مرتبط بهذا المستخدم.'
            ];
        }

        $patient = Patient::with('user')->findOrFail($patientId);

        $appointments = Appointment::where('lab_id', $labId)
            ->where('patient_id', $patientId)
            ->with([
                'appointmentLabHaveAnalys.lab_have_analyses.labAnalysis'
            ])
            ->get();

        $appointmentData = $appointments->map(function ($appointment) {
            return [
                'appointment_id' => $appointment->id,
                'date_time'      => $appointment->date_time,
                'analyses'       => $appointment->appointmentLabHaveAnalys->map(function ($item) {
                    $labAnalysis = $item->lab_have_analyses->labAnalysis ?? null;

                    return [
                        'analysis_id'   => $labAnalysis?->id,
                        'analysis_name' => $labAnalysis?->lab_analyses_name,
                        'result'        => $item->result,
                    ];
                }),
            ];
        });

        return [
            'user' => [
                'patient_id'   => $patient->id,
                'name'         => $patient->user
                    ? $patient->user->first_name . ' ' . $patient->user->last_name
                    : null,
                'phone'        => $patient->phone,
                'gender'       => $patient->gender,
                'age'          => $patient->dob ? Carbon::parse($patient->dob)->age : null,
                'appointments' => $appointmentData,
            ],
            'message' => 'تم جلب أرشيف المريض بنجاح',
        ];
    } catch (Throwable $th) {
        throw $th;
    }
}

}
