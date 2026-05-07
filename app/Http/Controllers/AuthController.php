<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //tampilkan form login
    public function showlogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    //proses login
    public function login(Request $request)
    {
       $credentials = $request->only('email', 'password');
           
       if (auth()->attempt($credentials)) {

           return redirect()->intended('/dashboard');
       }

       return back()->with('error', 'Login Gagal');
    }

    // register
    public function register(Request $request){
        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login');
    }

    // logout
    public function logout()
    {
        Auth()->logout();
        return redirect('/login');
    }
}
