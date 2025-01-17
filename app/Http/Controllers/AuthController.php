<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request input
        $request->validate([
            "username" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|min:8|confirmed"
        ]);

        // Create the user
        User::create([
            "name" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('register');
        }
    }

    public function login(Request $request)
    {
        return view("auth.login");
    }

    public function dashboard(Request $request)
    {
        return view("auth.dashboard");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
