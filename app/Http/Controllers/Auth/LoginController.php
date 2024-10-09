<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function username()
    {
        return 'username'; // This can remain as username or can be modified if needed
    }

    public function showLoginForm()
{
    if (Auth::check()) {
        return $this->redirectToDashboard(Auth::user()->role);
    }

    // Menambahkan header untuk mencegah caching halaman login
    return response()
        ->view('auth.login')
        ->withHeaders([
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
            'Pragma' => 'no-cache',
            'Expires' => 'Sat, 01 Jan 2000 00:00:00 GMT',
        ]);
}

    
    protected function authenticated(Request $request, $user)
    {
        $request->session()->regenerate();
        return $this->redirectToDashboard($user->role)->withHeaders([
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
            'Pragma' => 'no-cache',
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        // Determine if the username is an email
        $credentials = [
            'password' => $request->password,
        ];

        if (filter_var($request->name, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $request->name; 
        } else {
            $credentials['name'] = $request->name;
        }

        if (Auth::attempt($credentials)) {
            return $this->redirectToDashboard(Auth::user()->role);
        }

        return redirect()->back()->withErrors(['login' => 'Username atau Password salah'])->withInput();
    }

    protected function redirectToDashboard($role)
    {
        switch ($role) {
            case 'Admin':
                return redirect()->route('admin.dashboard');
            case 'Dosen':
                return redirect()->route('dosen.dashboard');
            case 'Mahasiswa':
                return redirect()->route('mahasiswa.dashboard');
            default:
                return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login'); // Redirect to the login page or wherever you want
    }
}
