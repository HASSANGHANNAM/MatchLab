<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Symfony\Component\HttpFoundation\Response;


class VerifiedEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,)
    {
        if(! $request->user() ||
        ($request->user() instanceof MustVerifyEmail &&
        !$request->user()->hasVerifiedEmail())){
            return Response::Error(false,'your email address is not verified');
        }
        return $next($request);
    }
}
