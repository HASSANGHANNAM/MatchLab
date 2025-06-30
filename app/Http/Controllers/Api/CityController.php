<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CitySearchRequest;
use App\Http\Responses\Response;
use App\Services\CityServices;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class CityController extends Controller
{
    private CityServices $cityServices;

    public function __construct(CityServices $cityServices)
    {
        $this->cityServices = $cityServices;
    }
    public function citySearch(CitySearchRequest $request): JsonResponse
    {
        try {
            $data = $this->cityServices->citySearch($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
}
