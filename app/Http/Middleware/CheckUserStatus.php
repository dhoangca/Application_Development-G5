<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->status === 'blocked') {
            Auth::logout();

            return redirect()->route('Auth.getLogin')->with('error', 'Your account has been disabled. Please contact the administrator for assistance.');
        }

        return $next($request);
    }
}
