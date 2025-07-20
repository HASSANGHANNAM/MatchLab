<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientPutUpdateRateReveiwRequest;
use Illuminate\Http\Request;
use App\Http\Responses\Response;
use App\Services\EvaluationServices;
use Illuminate\Http\JsonResponse;
use Throwable;

class EvaluationController extends Controller
{
    private EvaluationServices $evaluationServices;

    public function __construct(EvaluationServices $evaluationServices)
    {
        $this->evaluationServices = $evaluationServices;
    }
    public function patientPutUpdateRateReveiw(PatientPutUpdateRateReveiwRequest $request): JsonResponse
    {
        try {
            $data = $this->evaluationServices->patientPutUpdateRateReveiw($request);
            return Response::success($data['data'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function deleteReview($id): JsonResponse
    {
        try {
            $data = $this->evaluationServices->deleteReview($id);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function deleteRate($id): JsonResponse
    {
        try {
            $data = $this->evaluationServices->deleteRate($id);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function allEvaluation($id): JsonResponse
    {
        try {
            $data = $this->evaluationServices->allEvaluation($id);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function allEvaluationInmylab(): JsonResponse
    {
        try {
            $data = $this->evaluationServices->allEvaluationInmylab();
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
}
