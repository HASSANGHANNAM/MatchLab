<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\addPlanDaysRequest;
use App\Http\Requests\AddPlanRequest;
use Illuminate\Http\Request;
use App\Http\Requests\CitySearchRequest;
use App\Http\Responses\Response;
use App\Services\CityServices;
use App\Services\SubscriptionServices;
use Illuminate\Http\JsonResponse;
use Throwable;

class SubscriptionController extends Controller
{
    private SubscriptionServices $subscriptionServices;

    public function __construct(SubscriptionServices $subscriptionServices)
    {
        $this->subscriptionServices = $subscriptionServices;
    }
    public function addPlan(AddPlanRequest $request): JsonResponse
    {
        try {
            $data = $this->subscriptionServices->addPlan($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }

    public function allPlan(): JsonResponse
    {
        try {
            $data = $this->subscriptionServices->allPlan();
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function addPlanDays(addPlanDaysRequest $request): JsonResponse
    {
        try {
            $data = $this->subscriptionServices->addPlanDays($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    
}
