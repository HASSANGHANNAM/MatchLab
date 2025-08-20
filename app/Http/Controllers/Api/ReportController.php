<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LabPatientSearchRequest;
use App\Http\Requests\LabSuperAdminSearchRequest;
use App\Http\Responses\Response;
use App\Services\LabServices;
use App\Services\ReportServices;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ReportController extends Controller
{

    private ReportServices $reportServices;

    public function __construct(ReportServices $reportServices)
    {
        $this->reportServices = $reportServices;
    }
    public function labReport(): JsonResponse
    {
        try {
            $data = $this->reportServices->labReport();
            return Response::success($data['data'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
}
