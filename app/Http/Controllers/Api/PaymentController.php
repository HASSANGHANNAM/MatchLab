<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Responses\Response;
use App\Services\StripeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Stripe\Balance;
use Stripe\Charge;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Payout;
use Stripe\Stripe;
use Stripe\Transfer;
use Throwable;

class PaymentController extends Controller
{
    private StripeService $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }
    public function getPlatformBalance(): JsonResponse
    {
        try {
            $data = $this->stripeService->getPlatformBalance();
            return Response::success($data['data'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function  getBalance(): JsonResponse
    {
        try {
            $data = $this->stripeService->getBalance();
            return Response::success($data['data'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function withdrawBalance($amount): JsonResponse
    {
        try {
            $data = $this->stripeService->withdrawBalance($amount);
            return Response::success($data['data'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function depositBalance($amount): JsonResponse
    {
        try {
            $data = $this->stripeService->depositBalance($amount);
            return Response::success($data['data'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
}
