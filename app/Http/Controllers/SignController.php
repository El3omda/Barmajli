<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    #Login
    public function login() {
        return view('pages.signs.signin');
    }

    #Register
    public function register() {
        return view('pages.signs.register');
    }
}
