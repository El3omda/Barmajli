<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPagesController extends Controller
{
    #Dashboard
    public function dashboard() {
        return view('pages.user.dashboard');
    }
}
