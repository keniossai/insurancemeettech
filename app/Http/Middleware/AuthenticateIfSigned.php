<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateIfSigned
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->hasValidSignature()) {

            if ($request->id) Auth::loginUsingId($request->id);

            if ($request->user) Auth::loginUsingId($request->user);
        }

        return $next($request);
    }
}
