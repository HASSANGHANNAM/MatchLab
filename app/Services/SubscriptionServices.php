<?php

namespace App\Services;

use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class SubscriptionServices
{
    public function addPlan($request): array
    {
        return DB::transaction(function () use ($request) {
            if (Auth::user()->hasRole('SuperAdmin')) {
                $user = Plan::query()->create([
                    'plan_name' => $request['plan_name'],
                    'price' => $request['price'],
                    'number_of_days' => $request['number_of_days'],
                ]);
                $message = 'successfully!';
            } else {
                $message = 'Unauthorized access!';
                $code = 403;
            }
            return ['message' => $message, 'user' => null];
        });
    }
    public function allPlan(): array
    {
        if (Auth::user()->hasRole('SuperAdmin') || Auth::user()->hasRole('LabOwner')) {
            if (Auth::user()->hasRole('SuperAdmin')) {
                $plans = Plan::select('id', 'plan_name', 'price', 'number_of_days')->get();
            } else {
                $lab = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab;
                $plans = Plan::select('id', 'plan_name', 'price', 'number_of_days')->get();
                if ($lab->expiry_time !== null) {
                    $plans = $plans->filter(function ($plan) {
                        return $plan->plan_name !== 'Trial';
                    })->values();
                }
            }
            if ($plans->isNotEmpty()) {
                $message = 'successfully!';
            } else {
                $message =  "Not found any Plans";
            }
            $data['plans'] = $plans;
        } else {
            $message = 'Unauthorized access!';
            $data = null;
            $code = 403;
        }
        return ['message' => $message, 'user' => $data];
    }
    public function addPlanDays($request): array
    {
        return DB::transaction(function () use ($request) {
            if (Auth::user()->hasRole('LabOwner')) {
                $lab = User::with('labOwner.lab')->findOrFail(Auth::id())->labOwner->lab;
                $plan = Plan::find($request['plan_id']);
                $startDate = now();
                if ($lab->expiry_time && $lab->expiry_time < now()) {
                    $startDate = now();
                } elseif ($lab->expiry_time && $lab->expiry_time >= now()) {
                    $startDate = $lab->expiry_time;
                }
                $newExpiry = Carbon::parse($startDate)->addDays($plan->number_of_days);
                $add = DB::table('labs')->where(
                    [
                        ['id', '=', $lab->id],
                    ]
                )->update(['expiry_time' =>   $newExpiry]);
                $message = 'successfully!';
            } else {
                $message = 'Unauthorized access!';
                $code = 403;
            }
            return ['message' => $message, 'user' => null];
        });
    }
    
}
