<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SampleSearchRequest;
use App\Services\AnalysesServices;
use App\Services\SampleServices;
use Illuminate\Http\Request;
use App\Http\Responses\Response;
use Illuminate\Http\JsonResponse;
use Throwable;

class SampleController extends Controller
{
    private SampleServices $sampleServices;

    public function __construct(SampleServices $sampleServices)
    {
        $this->sampleServices = $sampleServices;
    }

    public function sampleSearch(SampleSearchRequest $request): JsonResponse
    {
        try {
            $data = $this->sampleServices->sampleSearch($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
}
