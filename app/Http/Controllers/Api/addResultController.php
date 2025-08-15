<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\LabResultServices;
use App\Http\Responses\Response;
use App\Http\Requests\LabResultRequest;
use Illuminate\Http\JsonResponse;
use Throwable;


use Illuminate\Http\Request;

class addResultController extends Controller
{
     private LabResultServices $LabResultServices;

    public function __construct(LabResultServices $LabResultServices)
    {
        $this->LabResultServices = $LabResultServices;
    }
        public function addResult(LabResultRequest $request): JsonResponse
    {
        try {
            $data = $this->LabResultServices->addResult($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            return Response::Error([], $th->getMessage());
        }
    }
}
