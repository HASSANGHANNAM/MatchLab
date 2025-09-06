<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LabWorkingHour;
use App\Services\appointmentServices;
use App\Models\Lab;
use App\Models\Appointment;
use App\Http\Responses\Response;
use App\Http\Requests\LabWorkingHourRequest;
use App\Http\Requests\UpdateAppointmentStatusRequest;
use App\Http\Requests\updateAppointmentRequest;
use App\Http\Requests\BookAppointmentRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Throwable;

use function PHPUnit\Framework\isEmpty;

class LabSchedulController extends Controller
{
    private appointmentServices $appointmentServices;

    public function __construct(appointmentServices $appointmentServices)
    {
        $this->appointmentServices = $appointmentServices;
    }

    public function setLabSchedules(LabWorkingHourRequest $request): JsonResponse
    {
        try {
            $data = $this->appointmentServices->setLabSchedules($request->validated()['schedules']);
            return Response::success($data['data'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }

    public function getAvailableAppointments($lab_id): JsonResponse
    {
        try {
            $slots = $this->appointmentServices->getAvailableAppointments($lab_id);
            if (empty($slots)) {
                return Response::Success([], 'المخبر غير موجود', 403);
            } elseif ($slots == ["dont have"]) {

                return Response::success([], 'المواعيد المتاحة للمختبر');
            } else {
                return Response::success($slots, 'المواعيد المتاحة للمختبر');
            }
        } catch (Throwable $th) {
            return Response::error([], $th->getMessage());
        }
    }
    public function bookAppointment(BookAppointmentRequest $request): JsonResponse
    {
        try {
            $appointment = $this->appointmentServices->bookAppointment($request->validated());
            return Response::success($appointment['user'], $appointment['message'],$appointment['code']);
        } catch (Throwable $th) {
            return Response::error([], $th->getMessage());
        }
    }

    public function getLabAppointments(): JsonResponse
    {
        try {
            $data = $this->appointmentServices->getLabAppointments();
            return Response::success($data['data'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            return Response::error([], $th->getMessage());
        }
    }

    public function updateAppointmentStatus($appointmentId, UpdateAppointmentStatusRequest $request): JsonResponse
    {
        try {
            $appointmentId = (int) $appointmentId;
            $status = $request->validated()['status'];

            $data = $this->appointmentServices->updateAppointmentStatus($appointmentId, $status);

            return Response::success($data['data'], $data['message'], $data['code']);
        } catch (ModelNotFoundException $e) {
            return Response::error([], 'الحجز غير موجود.', 404);
        } catch (Throwable $e) {
            return Response::error([], 'حدث خطأ غير متوقع: ' . $e->getMessage(), 500);
        }
    }
    public function updateAppointment($appointmentId, updateAppointmentRequest $request): JsonResponse
    {
        try {
            $appointmentId = (int) $appointmentId;
            $data = $this->appointmentServices->updateAppointment($appointmentId, $request->validated());

            return Response::success($data['data'], $data['message'], $data['code']);
        } catch (Throwable $th) {
            return Response::error([], 'حدث خطأ غير متوقع: ' . $th->getMessage(), 500);
        }
    }

    public function deleteAppointment($appointmentId): JsonResponse
    {
        try {
            $appointmentId = (int) $appointmentId;
            $data = $this->appointmentServices->deleteAppointment($appointmentId);


            if ($data['status'] === 1) {
                return Response::success($data['data'], $data['message']);
            }

            return Response::error($data['data'], $data['message']);
        } catch (Throwable $th) {
            return Response::error([], 'حدث خطأ غير متوقع: ' . $th->getMessage(), 500);
        }
    }
}
