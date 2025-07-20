<?php

namespace App\Services;

use App\Models\Evaluation;
use App\Models\Lab;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class EvaluationServices
{
    public function patientPutUpdateRateReveiw($request): array
    {
        $lab = Lab::find($request['lab_id']);
        if (!is_null($lab)) {
            if (Auth::user()->hasRole('Patient')) {
                $patient = DB::table('patients')->where('user_id', Auth::id())->first();
                $chekeEval = DB::table('evaluations')->where(
                    [
                        ['patient_id', '=', $patient->id],
                        ['lab_id', '=', $lab['id']]
                    ]
                )->first();
                if ($chekeEval == null) {
                    Evaluation::create([
                        "patient_id" =>  $patient->id,
                        "lab_id" => $lab['id'],
                        "rate" => $request['rate'],
                        "review" => $request['review'],
                    ]);
                    $message = "Success add your Evaluation";
                    $code = 200;
                } else {
                    DB::table('evaluations')->where(
                        [
                            ['patient_id', '=', $patient->id],
                            ['lab_id', '=', $lab['id']]
                        ]
                    )->update($request->only(['rate', 'review']));
                    $message = "Success update your Evaluation";
                    $code = 200;
                }
            } else {
                $message = 'Unauthorized access!';
                $code = 403;
            }
        } else {
            $message = 'Lab Not Found!';
            $code = 404;
        }
        return ['message' => $message, 'data' => null, 'code' => $code];
    }
    public function deleteReview($id): array
    {
        if (Auth::user()->hasRole('Patient')) {
            $patient = DB::table('patients')->where('user_id', Auth::id())->first();
            $delete = DB::table('evaluations')->where(
                [
                    ['id', '=', $id],
                    ['patient_id', '=', $patient->id]
                ]
            )->update(['review' => null]);

            if ($delete != null) {
                $check = DB::table('evaluations')->where(
                    [
                        ['id', '=', $id],
                        ['patient_id', '=', $patient->id]
                    ]
                )->first();
                if ($check->rate == null)
                    DB::table('evaluations')->where(
                        [
                            ['id', '=', $id],
                            ['patient_id', '=', $patient->id]
                        ]
                    )->delete();
                $message = "Success delete your review";
            } else
                $message = "The review not found in your reviews";
            $code = 200;
        } else {
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => null];
    }
    public function deleteRate($id): array
    {
        if (Auth::user()->hasRole('Patient')) {
            $patient = DB::table('patients')->where('user_id', Auth::id())->first();
            $delete = DB::table('evaluations')->where(
                [
                    ['id', '=', $id],
                    ['patient_id', '=', $patient->id]
                ]
            )->update(['rate' => null]);

            if ($delete != null) {
                $check = DB::table('evaluations')->where(
                    [
                        ['id', '=', $id],
                        ['patient_id', '=', $patient->id]
                    ]
                )->first();
                if ($check->review == null)
                    DB::table('evaluations')->where(
                        [
                            ['id', '=', $id],
                            ['patient_id', '=', $patient->id]
                        ]
                    )->delete();
                $message = "Success delete your rate";
            } else
                $message = "The review not found in your rates";
            $code = 200;
        } else {
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => null];
    }
    public function allEvaluation($id): array
    {
        if (Auth::user()->hasRole('Patient') || Auth::user()->hasRole('SuperAdmin')) {
            $evaluations = DB::table('evaluations')
                ->join('patients', 'evaluations.patient_id', '=', 'patients.id')
                ->join('users', 'patients.user_id', '=', 'users.id')
                ->where('evaluations.lab_id', $id)
                ->select(
                    'evaluations.id',
                    'evaluations.review',
                    'evaluations.rate',
                    DB::raw("CONCAT(users.first_name, ' ', users.last_name) as patient_name")
                )
                ->get();
            if ($evaluations->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message =  "Not found any Evaluation";
            }
            $data['evaluations'] = $evaluations;
        } else {
            $data = null;
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
    public function allEvaluationInmylab(): array
    {
        if (Auth::user()->hasRole('LabOwner')) {
            $labId = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab->id;
            $evaluations = DB::table('evaluations')
                ->join('patients', 'evaluations.patient_id', '=', 'patients.id')
                ->join('users', 'patients.user_id', '=', 'users.id')
                ->where('evaluations.lab_id', $labId)
                ->select(
                    'evaluations.id',
                    'evaluations.review',
                    'evaluations.rate',
                    DB::raw("CONCAT(users.first_name, ' ', users.last_name) as patient_name")
                )
                ->get();
            if ($evaluations->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message =  "Not found any Evaluation";
            }
            $data['evaluations'] = $evaluations;
        } else {
            $data = null;
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
}
