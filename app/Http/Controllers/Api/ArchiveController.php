<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ArchiveService;
use App\Http\Responses\Response;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Throwable;

class ArchiveController extends Controller
{
        protected ArchiveService $archiveService;

    public function __construct(ArchiveService $archiveService)
    {
        $this->archiveService = $archiveService;
    }

    public function labArchive(): JsonResponse
    {
        try {
            $data = $this->archiveService->getLabArchive();
            return Response::success($data['data'], $data['message']);
        } catch (Throwable $th) {
            return Response::Error([], $th->getMessage());
        }
    }

    public function patientArchive(int $patientId): JsonResponse
    {
        try {
            $data = $this->archiveService->getPatientArchive($patientId);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            return Response::Error([], $th->getMessage());
        }
    }

}
