<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{
    public function user_form(Request $request)
    {
        return view("user_form");
    }
}
