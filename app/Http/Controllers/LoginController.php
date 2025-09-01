<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function login(): View{
        return view("auth.login");
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            "email" => 'required|string|email|max:100',
            "password" => 'required|string'
        ]);

        if(Auth::attempt($credentials)){
            echo 'valid. Login successful';
        }else{
            echo 'invalid. Login not successful';
        }
    }
}
