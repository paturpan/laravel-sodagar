<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class authscontroller extends Controller
{
    public function login()
    {
        return view ('auths.login');
    }

    public function postlogin(request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('plays');
        }
        return redirect('/login')->with('status','Email atau Password Salah');
    }

    public function logout() 
    {
         Auth::logout();
         return view ('auths.login');
    }
}
