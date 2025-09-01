<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{   
    public function register(){
        return view("auth.register");
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            "name" => "required|string|max:100",
            "email" => "required|string|email|max:100|unique:users",
            "password" => "required|string|min:8|confirmed"
        ]);

        $validatedData["password"] = Hash::make($validatedData["password"]);

        $user = User::create($validatedData);

    }
}
