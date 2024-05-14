<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Don't forget to import the User model if you haven't already

class AuthManager extends Controller
{
    function login()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function loginPost(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);
    
    $credentials = $request->only('email', 'password');
    if(Auth::attempt($credentials)){
        return redirect()->intended(route('homepage'))->with("success", "Logged in successfully!");
    }
    return redirect(route('login'))->with("error", "Invalid credentials. Please try again.");
}


function registrationPost(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
    ]);

    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);

    $user = User::create($data);

    if ($user) {
        return redirect(route('login'))->with("success", "Registration successful. You can now login.");
    }

    return redirect(route('registration'))->with("error", "Registration failed. Please try again.");
}


    function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
