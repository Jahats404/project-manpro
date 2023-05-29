<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanLogin(){
        return view('login');
    }
    public function postLogin(Request $request){
        if (Auth::attempt($request->only('name', 'password'))){
            return redirect('/index');
        }
        return redirect('/');
    }
}
