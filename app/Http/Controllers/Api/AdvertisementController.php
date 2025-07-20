<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddAdvertisementRequest;
use Illuminate\Http\Request;
use App\Http\Requests\addAnalysesToLabRequest;
use App\Http\Requests\AdvertisementSearchRequest;
use App\Http\Requests\AdvertisementUpdateRequest;
use App\Http\Requests\AnalysesSearchRequest;
use App\Http\Responses\Response;
use App\Services\AdvertisementServices;
use App\Services\AnalysesServices;
use Illuminate\Http\JsonResponse;
use Throwable;

class AdvertisementController extends Controller
{
    private AdvertisementServices $advertisementServices;
    public function __construct(AdvertisementServices $advertisementServices)
    {
        $this->advertisementServices = $advertisementServices;
    }
    public function AddAdvertisement(AddAdvertisementRequest $request): JsonResponse
    {
        try {
            $data = $this->advertisementServices->AddAdvertisement($request);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }

    public function deleteAdvertisement($id): JsonResponse
    {
        try {
            $data = $this->advertisementServices->deleteAdvertisement($id);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function advertisementSearch(AdvertisementSearchRequest $request): JsonResponse
    {
        try {
            $data = $this->advertisementServices->advertisementSearch($request);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
    public function advertisementUpdate(AdvertisementUpdateRequest $request, $id): JsonResponse
    {
        try {
            $data = $this->advertisementServices->advertisementUpdate($request, $id);
            return Response::success($data['user'], $data['message']);
        } catch (Throwable $th) {
            $message = $th->getMessage();
            return Response::Error([], $message);
        }
    }
}
