<?php
// app/Http/Middleware/CheckLabSubscription.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CheckLabSubscription
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->hasRole('LabOwner')) {
            $labUser = DB::table('lab_owners')
                ->where('lab_owners.user_id', auth()->user()->id)
                ->join('users', 'users.id', '=', 'lab_owners.user_id')
                ->join('labs', 'labs.id', '=', 'lab_owners.lab_id')
                ->first();
            if ($labUser == null) {
                return response()->json([
                    'status' => 0,
                    'message' => 'lab_not_found',
                ], 403);
            }
            if (!$labUser->subscriptions_status) {
                return response()->json([
                    'status' => 0,
                    'message' => 'lab subscriptions was expierd please add plan to continue',
                ], 403);
            }
        }

        return $next($request);
    }
}
