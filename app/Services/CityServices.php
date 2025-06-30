<?php

namespace App\Services;

use App\Models\City;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class CityServices
{
    public function citySearch($request): array
    {

        if (Auth::user()->hasRole('LabOwner') || Auth::user()->hasRole('SuperAdmin') || Auth::user()->hasRole('Patient')) {
            $query = City::query();
            if (isset($request['city_name'])) {
                $query->where('city_name', 'like', '%' . $request['city_name'] . '%');
            }
            $data['cities'] = $query->get(['id', 'city_name']);
            if ($data['cities']->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message = 'no cities found!';
            }
        } else {
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
}
