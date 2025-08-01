<?php

namespace App\Services;

use App\Models\Advertisement;
use App\Models\Sample;
use App\Models\User;
use App\Services\NotificationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class AdvertisementServices
{
    public function AddAdvertisement($request): array
    {
        return DB::transaction(function () use ($request) {
            if (Auth::user()->hasRole('LabOwner')) {
                $labId = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab->id;

                Advertisement::create([
                    'lab_id' => $labId,
                    'title' => $request['title'],
                    'descriptions' => $request['descriptions']
                ]);
                $notificationService = new NotificationService();
                $notificationService->send(
                    Auth::user(),
                    "إضافة إعلان جديد",
                    "تمت إضافة إعلان جديد بنجاح إلى مختبرك بعنوان: {$request['title']}"
                );
                $message = 'successfully! add Advertisement to your Lab!';
            } else {
                $message = 'Unauthorized access!';
            }
            return ['message' => $message, 'user' => null];
        });
    }
    public function deleteAdvertisement($id): array
    {
        if (Auth::user()->hasRole('LabOwner')) {
            $labId = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab->id;
            $delete = DB::table('advertisements')->where(
                [
                    ['id', '=', $id],
                    ['lab_id', '=', $labId]
                ]
            )->delete();
            if ($delete != null)
                $message = "Success delete Advertisement from your lab";
            else
                $message = "The Advertisement not found in your lab";

            $code = 200;
        } else {
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => null];
    }
    public function advertisementSearch($request): array
    {
        if (Auth::user()->hasRole('SuperAdmin') || Auth::user()->hasRole('Patient')) {
            $query = Advertisement::query()->with(['lab' => function ($query) {
                $query->select('id', 'lab_name');
            }]);
            if (isset($request['advertisement_title'])) {
                $query->where('title', 'like', '%' . $request['advertisement_title'] . '%');
            }
            if (isset($request['lab_name'])) {
                $query->whereHas('lab', function ($q) use ($request) {
                    $q->where('lab_name', 'like', '%' . $request['lab_name'] . '%');
                });
            }
            $data['Advertisements'] = $query->get(['id', 'title', 'descriptions', 'lab_id'])->makeHidden(['lab_id']);
            if ($data['Advertisements']->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message = 'no Advertisements found!';
            }
        } elseif (Auth::user()->hasRole('LabOwner')) {
            $labId = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab->id;
            $query = Advertisement::query()->where('lab_id', $labId);
            if (isset($request['advertisement_title'])) {
                $query->where('title', 'like', '%' . $request['advertisement_title'] . '%');
            }
            $data['Advertisements'] = $query->get(['id', 'title', 'descriptions']);
            if ($data['Advertisements']->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message = 'no Advertisements found!';
            }
        } else {
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
    public function advertisementUpdate($request, $id): array
    {
        if (Auth::user()->hasRole('LabOwner')) {
            $labId = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab->id;
            $advertisement = Advertisement::where([
                ['lab_id', '=', $labId],
                ['id', '=', $id]
            ])->first();
            if ($advertisement != null) {
                $advertisement->update($request->only(['title', 'descriptions']));
                $data['advertisement'] = $advertisement;
                $notificationService = new NotificationService();
                $notificationService->send(
                    Auth::user(),
                    "تحديث إعلان",
                    "تم تحديث الإعلان بنجاح بعنوان: {$advertisement->title}"
                );
                $message = 'successfully!';

            } else {
                $message = 'Advertisement not found!';
                $data['advertisement'] = null;
            }
        } else {
            $message = 'Unauthorized access!';
            $data = null;
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
}
