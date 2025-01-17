<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // // Validate the request input


        // // Create the user

        // Attempt to authenticate the user
        if ($request->has('register')) {
            // dd($request->all());
            $request->validate([
                "username" => "required|string|max:255",
                "email" => "required|email|unique:users",
                "password" => "required|string|min:8|confirmed",
                "password_confirmation" => "required|string|min:8|"
            ]);

            $is_insert = User::create([
                "name" => $request->username,
                "email" => $request->email,
                "password" => bcrypt($request->password)
            ]);
            if($is_insert){
                $request->session()->flash('alert', array('message'=>'Banner Upload Successful', 'status'=>'success'));
                    return redirect()->route('login');
            }else{
                $request->session()->flash('alert', array('message'=>'Banner Upload Successful', 'status'=>'success'));

            }
        }

        return  view("auth.register");
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
