<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if (!$user) {
            // Redirect to the login page or return an error response
            return redirect()->route('Auth.getLogin');
        }

        if (!in_array($user->role, $roles)) {
            // Redirect to an unauthorized page or return an error response
            return abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
