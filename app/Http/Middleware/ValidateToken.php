<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->input('token');

        // Lakukan validasi token di sini
        if (!$token || $token !== session('user_token')) {
            return redirect('/'); // Arahkan pengguna jika token tidak valid
        }

        return $next($request);
    }
}
