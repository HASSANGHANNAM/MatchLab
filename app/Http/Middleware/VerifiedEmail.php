<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Symfony\Component\HttpFoundation\Response;
use App\Http\Responses\Response;
use App\Models\EmailVerification;
use Illuminate\Support\Facades\DB;

class VerifiedEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,)
    {
        // if (
        //     ! $request->user() ||
        //     ($request->user() instanceof MustVerifyEmail &&
        //         !$request->user()->hasVerifiedEmail())
        // ) {
        //     return Response::Error(null, 'your email address is not verified');
        // }
        if (auth()->user()) {
            $request->email = auth()->user()->email;
        }
        if ($request->email == null) {
            return response()->json([
                'message' => 'The email field is required.',
                'errors' => [
                    'email' => ['The email field is required.']
                ]
            ], 422);
        }
        $user = DB::table('users')
            ->where('email', $request->email)
            ->first();
        if ($user == null) {
            return response()->json([
                'status' => 1,
                'data' => null,
                'message' => 'User Email not found'
            ], 404);
        }
        $verification = EmailVerification::where('user_id', $user->id)
            ->first();
        if ($verification == null) {
            return response()->json([
                'status' => 1,
                'data' => null,
                'message' => 'verification not found'
            ], 404);
        }
        if ($verification->is_verified == false) {
            return Response::Error(null, 'your email address is not verified');
        }
        return $next($request);
    }
}
