<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(){
        return view('back.auth.login');
    }
    public function login_post(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->route('dashboard');
        }else{
            return redirect()->route('log_in_get')->withErrors('Email və ya şifrə yanlışdır');
        }


    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('log_in_get');
    }
}
