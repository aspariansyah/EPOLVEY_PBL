<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Moduls\User\hasRole;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || !Auth::user()->role) {
            // Redirect user if they don't have the required role
            return redirect()->route('login')->with('error', 'You do not have access to this page.');
        }

        return $next($request);
    }
}

