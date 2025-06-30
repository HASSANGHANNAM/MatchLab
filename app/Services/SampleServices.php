<?php

namespace App\Services;

use App\Models\Sample;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class SampleServices
{
    public function sampleSearch($request): array
    {
        if (Auth::user()->hasRole('LabOwner') || Auth::user()->hasRole('SuperAdmin')) {
            $query = Sample::query();
            if (isset($request['sample_name'])) {
                $query->where('sample_name', 'like', '%' . $request['sample_name'] . '%');
            }
            $data['samples'] = $query->get(['id', 'sample_name']);
            if ($data['samples']->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message = 'no samples found!';
            }
        } else {
            $message = 'Unauthorized access!';
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
}
