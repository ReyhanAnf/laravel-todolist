<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validate = $request->validate([ 
            'name' => 'required|string|min:3|max:255',
            'username' => 'required|string|min:3|max:100|unique:users,username',
            'email' => 'required|string|min:3|max:255|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'confirm_password' => 'required'
        ]);

        $validate['password'] = Hash::make($request->password);
        unset($validate['confirm_password']);

        User::create($validate);
        session()->flash('status', 'Registrasi Berhasil!');
        
        return redirect('/login');
 
    }

    public function registerForm()
    {
        return view('components.auth.register');
    }
}
