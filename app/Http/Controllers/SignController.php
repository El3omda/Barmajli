<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignController extends Controller
{
    #Login
    public function login() {
        return view('pages.signs.signin');
    }

    #Enter
    public function enter(Request $request) {
        $inputs = $request->validate([
            'email' => 'required|min:3|email',
            'password' => 'required|min:6',
        ]);

        #Try To Login
        if (Auth::attempt($inputs, $request->remember)) {
            $request->session()->regenerate();
            return redirect('/dashboard')->with('msg', 'Welcome Back You Logged In Successfully');
        }

        return back();
    }

    #Logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect('/');
    }

    #Register
    public function register() {
        return view('pages.signs.register');
    }

    #Store
    public function store(Request $request) {
        $inputs = $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|min:3|email',
            'gender' => 'required',
            'password' => 'required|min:6',
        ]);

        $inputs['password'] = bcrypt($inputs['password']);

        if ($user = User::create($inputs)) {

            // Login
            Auth::login($user);
            $request->session()->regenerate();
            return redirect('/dashboard')->with('msg', 'Success : Email Created And You Are Now Logged In');

        }

        return back()->with('msg', 'Faild : SomeThing Went Wrong Please Try Again Later');
    }
}
