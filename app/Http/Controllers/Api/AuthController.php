<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserSinupRequest;
use App\Http\Requests\UserSininRequest;
use App\Http\Requests\VerifyEmailRequest;
use App\Http\Requests\updatePatientRequest;
use App\Http\Requests\updateLabOwner;
use App\Http\Requests\UpdatePatientEmailRequest;
use App\Http\Requests\UpdatePatientPasswordRequest;
use App\Http\Requests\UserSinupLabOwnerRequest;
use App\Http\Responses\Response;
use App\Services\UserServices;
use App\Http\Requests\Validator;
use App\Models\Author;
use App\Models\User;
use App\Models\EmailVerification;
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

    public function updatePatient(updatePatientRequest $request): JsonResponse
    {
        try {
            $data = $this->userServices->updatePatient($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }

    public function updateLabOwner(updateLabOwner $request): JsonResponse
    {
        try {
            $data = $this->userServices->updateLabOwner($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function getOwnerLabInfo(): JsonResponse
    {
        try {
            $data = $this->userServices->getOwnerLabInfo();
            return Response::success($data['data'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function getPatientInfo(): JsonResponse
    {
        try {
            $data = $this->userServices->getPatientInfo();
            return Response::success($data['data'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function getUsersWithRoles(): JsonResponse
    {
        try {
            $data = $this->userServices->getUsersWithRoles();
            return Response::success($data['data'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function verifyEmail(VerifyEmailRequest $request): JsonResponse
    {
        try {
            $user = User::where('email', $request->email)->first();
            $verification = EmailVerification::where('user_id', $user->id)
                ->where('code', $request->code)
                ->where('is_verified', false)
                ->where('expires_at', '>', now())
                ->first();

            if (!$verification) {
                return Response::Error([], 'رمز التحقق غير صالح أو منتهي الصلاحية');
            }

            $verification->update(['is_verified' => true]);
            $user->update(['email_verified_at' => now()]);

            return Response::success([], 'تم تأكيد البريد الإلكتروني بنجاح');
        } catch (\Throwable $th) {
            return Response::Error([], $th->getMessage());
        }
    }

    public function resendVerification(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        try {
            $message = $this->userServices->resendVerificationCode($request->email);
            return Response::success([], $message);
        } catch (\Throwable $th) {
            return Response::Error([], $th->getMessage());
        }
    }
    public function updatePatientPassword(UpdatePatientPasswordRequest $request): JsonResponse
    {
        try {
            $data = $this->userServices->updatePatientPassword($request->validated());
            return Response::success($data['user'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function updatePatientEmail(UpdatePatientEmailRequest $request): JsonResponse
    {
        try {
            $data = $this->userServices->updatePatientEmail($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
}
