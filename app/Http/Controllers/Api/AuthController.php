<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserSinupRequest;
use App\Http\Requests\UserSininRequest;
use App\Http\Requests\UserSinupLabOwnerRequest;
use App\Http\Responses\Response;
use App\Services\UserServices;
use App\Http\Requests\Validator;
use App\Models\Author;
use Illuminate\Http\jsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Throwable;


class AuthController extends Controller
{
    private UserServices $userServices;

    public function __construct(UserServices $userServices)
    {
        $this->userServices = $userServices;
    }

    public function registerPatient(UserSinupRequest $request): JsonResponse
    {
        try {
            $data = $this->userServices->registerPatient($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function registerOwnerLab(UserSinupLabOwnerRequest $request): JsonResponse
    {
        try {
            $data = $this->userServices->registerOwnerLab($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }

    public function login(UserSininRequest $request): JsonResponse
    {
        $data = [];
        try {
            $data = $this->userServices->login($request);
            return Response::success($data['user'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error($data, $message);
        }
    }

    public function logout(): JsonResponse
    {
        $data = [];
        try {
            $data = $this->userServices->logout();
            return Response::success($data['user'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error($data, $message);
        }
    }

    public function user(): JsonResponse
    {
        return Response::Success($this->userServices->details(), 'user info successfully');
    }

        public function updatePatient(UserSinupRequest $request): JsonResponse
    {
        try {
            $data = $this->userServices->updatePatient($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }

            public function updateLabOwner(UserSinupLabOwnerRequest $request): JsonResponse
    {
        try {
            $data = $this->userServices->updateLabOwner($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }

}

