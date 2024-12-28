<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // if($request->password == $request->confirm_password) {
            $validate = $request->validate([ 
                'name' => 'required|string|min:3|max:255',
                'username' => 'required|string|min:3|max:100|unique:users,username',
                'email' => 'required|string|min:3|max:255|unique:users,email',
                'password' => 'required|string|min:3|max:255',
            ]);

            $validate['password']= Hash::make($request->password);

            User::create($validate);

            session()->flash('status', 'Registrasi Berhasil!');
            
            return redirect('/login');
        // } else {
        //    dd("password tidak sesuai");
        // }
    }

    public function registerForm()
    {
        return view('components.auth.register');
    }
}
