<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|min:3|max:255',
            'password' => 'required|string|min:6|max:255',
        ]);
        
        if (Auth::attempt($credentials)){
            session()->regenerate();
            return redirect()->intended('dashboard');
        }
        
        return back()->withErrors([
            'email' => 'Terjadi Kesalahan, Cek email atau password anda!',
        ])->onlyInput('email');
    }
    
    public function loginForm()
    {
        return view('components.auth.login');
    }


    
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
