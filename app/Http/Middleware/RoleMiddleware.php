<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }

        // Ambil role user dari session dan cek apakah sesuai dengan role yang diminta
        $userRole = Auth::user()->role;

        if ($userRole !== $role) {
            return redirect()->route('login')->with('error', 'You do not have access to this page.');
        }

        return $next($request);
    }
}
