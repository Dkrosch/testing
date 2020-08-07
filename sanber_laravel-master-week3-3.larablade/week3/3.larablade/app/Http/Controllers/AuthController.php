<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form() {
        return view("register-form");
    }

    public function welcome(Request $request) {
        $name = $request->input('firstname');
        return view("welcome", compact("name"));
    }
}
