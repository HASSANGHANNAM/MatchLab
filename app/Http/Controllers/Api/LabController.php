<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LabPatientSearchRequest;
use App\Http\Requests\LabSuperAdminSearchRequest;
use App\Http\Responses\Response;
use App\Services\LabServices;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class LabController extends Controller
{

    private LabServices $labServices;

    public function __construct(LabServices $labServices)
    {
        $this->labServices = $labServices;
    }
    public function labSearchPatient(LabPatientSearchRequest $request): JsonResponse
    {
        try {
            $data = $this->labServices->labSearchPatient($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function labSearchSuperAdmin(LabSuperAdminSearchRequest $request): JsonResponse
    {
        try {
            $data = $this->labServices->labSearchSuperAdmin($request->validated());
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function labById($id): JsonResponse
    {
        try {
            $data = $this->labServices->labById($id);
            return Response::success($data['lab'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function patientPutDeleteFavoriteLab($id): JsonResponse
    {
        try {
            $data = $this->labServices->patientPutDeleteFavoriteLab($id);
            return Response::success($data['data'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function updateGlobalUnitPrice($price_of_global_unit): JsonResponse
    {
        try {
            $data = $this->labServices->updateGlobalUnitPrice($price_of_global_unit);
            return Response::success($data['data'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
}
