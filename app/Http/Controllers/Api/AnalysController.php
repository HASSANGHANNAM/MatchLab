<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\addAnalysesToLabRequest;
use App\Http\Requests\AnalysesSearchRequest;
use Illuminate\Http\Request;
use App\Http\Responses\Response;
use App\Services\AnalysesServices;
use Illuminate\Http\JsonResponse;
use Throwable;

class AnalysController extends Controller
{
    private AnalysesServices $analysesServices;
    public function __construct(AnalysesServices $analysesServices)
    {
        $this->analysesServices = $analysesServices;
    }

    public function AnalysesSearchLabOwner(AnalysesSearchRequest $request): JsonResponse
    {
        try {
            $data = $this->analysesServices->AnalysesSearchLabOwner($request);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function AnalysesSearchLabOwnerNotInLab(AnalysesSearchRequest $request): JsonResponse
    {
        try {
            $data = $this->analysesServices->AnalysesSearchLabOwnerNotInLab($request);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function AnalysesLabOwnerById($id): JsonResponse
    {
        try {
            $data = $this->analysesServices->AnalysesLabOwnerById($id);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function AnalysesSearchSuperAdmin(AnalysesSearchRequest $request): JsonResponse
    {
        try {
            $data = $this->analysesServices->AnalysesSearchSuperAdmin($request);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function AnalysesSuperAdminById($id): JsonResponse
    {
        try {
            $data = $this->analysesServices->AnalysesSuperAdminById($id);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function addAnalysesToLab(AddAnalysesToLabRequest $request): JsonResponse
    {
        try {
            $data = $this->analysesServices->addAnalysesToLab($request);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function deleteAnalysLabOwner($id): JsonResponse
    {
        try {
            $data = $this->analysesServices->deleteAnalysLabOwner($id);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
}
