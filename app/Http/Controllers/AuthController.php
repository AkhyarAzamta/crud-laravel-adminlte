<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str; // Add this line
use App\Models\User; // Add this line
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function postregister(Request $request){
        $users = new \App\Models\User;
        $users->role = "mahasiswa";
        $users->name = $request->nama;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->remember_token = Str::random(50);
        $users->save();

        return redirect('/login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
}
