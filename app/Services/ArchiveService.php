<?php

namespace App\Services;

use App\Models\Appointment;
use App\Models\AppointmentLabHaveAnalys;
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
                'analyses.labAnalysis.lab'  // إضافة معلومات المختبر إذا كانت موجودة
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
                        // $labHaveAnalysis = $analysis->lab_have_analyses;   // العلاقة الوسطية
                        $labAnalysis = $analysis?->labAnalysis;
                        // dd($labAnalysis);
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
                    'message' => 'لم يتم العثور على مختبر مرتبط بهذا المستخدم.'
                ];
            }

            $patient = Patient::with('user')->findOrFail($patientId);
            $appointments = Appointment::where('lab_id', $labId)
                ->where('patient_id', $patientId)
                ->with([
                    'appointmentLabHaveAnalys.labAnalysis.range'
                ])
                ->get();
            $appointmentData = $appointments->map(function ($appointment) {
                return [
                    'appointment_id' => $appointment->id,
                    'date_time'      => $appointment->date_time,
                    'analyses'       => $appointment->appointmentLabHaveAnalys->map(function ($item) {
                        $labAnalysis = $item->labAnalysis ?? null;
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

    public function getPatientsArchiveInMyLab(): array
    {
        if (Auth::user()->hasRole('LabOwner')) {
            $lab = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab;
            $users = User::select('users.id', 'users.first_name', 'users.last_name', 'patients.id as patient_id', 'users.email')
                ->join('patients', 'patients.user_id', '=', 'users.id')
                ->join('appointments', 'appointments.patient_id', '=', 'patients.id')
                ->where('appointments.lab_id', $lab->id)
                ->distinct()
                ->get();
            // dd($lab);
            $message = 'successfully!';
        } else {
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => $users];
    }


    public function getMyBookings(): array
    {
        $patientId = Auth::user()->patient->id ?? null;

        if (!$patientId) {
            return [
                'data' => [],
                'message' => 'هذا المستخدم ليس مريضاً مسجلاً.'
            ];
        }

        $appointments = Appointment::where('patient_id', $patientId)
            ->with([
                'lab:id,lab_name',
                'location:id,address,city_id',
                'location.city:id,city_name',
                'appointmentLabHaveAnalys.labAnalysis:id,lab_analyses_name'
            ])
            ->orderByDesc('date_time')
            ->get();

        $data = $appointments->map(function ($appt) {
            return [
                'appointment_id' => $appt->id,
                'lab_name'       => $appt->lab?->lab_name,
                'date_time'      => $appt->date_time,
                'patient_name'   => $appt->patient_name,
                'patient_id_number'    => $appt->patient_id_number,
                'tests'          => $appt->appointmentLabHaveAnalys
                                        ->map(fn($aa) => [
                                            'id'   => $aa->labAnalysis?->id,
                                            'name' => $aa->labAnalysis?->lab_analyses_name,
                                        ])
                                        ->filter()
                                        ->values(),
                'booking_type'   => $appt->type,
            ];
        });

        return [
            'data' => $data,
            'message' => 'تم جلب سجل الحجوزات بنجاح',
        ];
    }



    public function getAppointmentTests(int $appointmentId): array
    {
        $patientId = Auth::user()->patient->id ?? null;

        if (!$patientId) {
            return [
                'data' => [],
                'message' => 'هذا المستخدم ليس مريضاً مسجلاً.'
            ];
        }

        $appointment = Appointment::where('id', $appointmentId)
            ->where('patient_id', $patientId)
            ->with('appointmentLabHaveAnalys.labAnalysis.range')
            ->first();

        if (!$appointment) {
            return [
                'data' => [],
                'message' => 'لا يوجد تحليل'
            ];
        }

        $tests = $appointment->appointmentLabHaveAnalys->map(function ($row) use ($appointment) {
            $labAnalysis = $row->labAnalysis ?? null;

            if (!$labAnalysis) {
                return null;
            }

            $range = $labAnalysis->range;
            $result = $row->result;
            $min = null;
            $max = null;
            $unit = $range ? $range->unit : null;
            $status = null;

            if ($range && $appointment->patient?->dob) {
                $age = Carbon::parse($appointment->patient->dob)->age;

                if ($age <= 1) {
                    $min = $range->newborns_min;
                    $max = $range->newborns_max;
                } elseif ($age <= 12) {
                    $min = $range->children_min;
                    $max = $range->children_max;
                } else {
                    if ($appointment->patient->gender === 'male') {
                        $min = $range->men_min;
                        $max = $range->men_max;
                    } else {
                        $min = $range->women_min;
                        $max = $range->women_max;
                    }
                }

                if ($result !== null && $min !== null && $max !== null) {
                    if ($result < $min) {
                        $status = 'low';
                    } elseif ($result > $max) {
                        $status = 'high';
                    } else {
                        $status = 'normal';
                    }
                }
            }

            return [
                'patient_name'   => $appointment->patient_name,  
                'analysis_id'    => $labAnalysis->id,
                'analysis_name'  => $labAnalysis->lab_analyses_name,
                'result'         => $result,
                'range' => [
                    'min'  => $min,
                    'max'  => $max,
                    'unit' => $unit,
                ],
                'status' => $status,
            ];
        })->filter()->values();

        return [
            'data' => $tests,
            'message' => 'تم جلب قائمة الفحوصات بنجاح',
        ];
    }



    // public function getTestResult(int $appointmentId, int $analysisId): array
    // {
    //     $patientId = Auth::user()->patient->id ?? null;

    //     if (!$patientId) {
    //         return [
    //             'data' => null,
    //             'message' => 'هذا المستخدم ليس مريضاً مسجلاً.'
    //         ];
    //     }

    //     $appointment = Appointment::where('id', $appointmentId)
    //         ->where('patient_id', $patientId)
    //         ->with('appointmentLabHaveAnalys.lab_have_analyses.labAnalysis')
    //         ->firstOrFail();

    //     $row = $appointment->appointmentLabHaveAnalys->first(function ($item) use ($analysisId) {
    //         $labAnalysis = $item->lab_have_analyses->labAnalysis ?? null;
    //         if (!$labAnalysis) return false;

    //         // استخدام == بدلاً من === لتجنب مشاكل النوع
    //         return $labAnalysis->id == $analysisId;
    //     });


    //     if (!$row) {
    //         return [
    //             'data' => null,
    //             'message' => 'لم يتم العثور على الفحص المطلوب.'
    //         ];
    //     }

    //     $labAnalysis = $row->lab_have_analyses->labAnalysis ?? null;

    //     return [
    //         'data' => [
    //             'appointment_id' => $appointment->id,
    //             'analysis_id'    => $labAnalysis?->id,
    //             'analysis_name'  => $labAnalysis?->lab_analyses_name,
    //             'result'         => $row->result,
    //         ],
    //         'message' => 'تم جلب نتيجة الفحص بنجاح',
    //     ];
    // }


}
