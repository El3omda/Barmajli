<?php

use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.app');
});

// Signs

#Login
Route::get('/login', [SignController::class, 'login']);

#Enter
Route::post('/login/enter', [SignController::class, 'enter']);

#Register
Route::get('/register', [SignController::class, 'register']);

#Store
Route::post('/register/store', [SignController::class, 'store']);

#Logout
Route::get('/logout', [SignController::class, 'logout']);

// User

#Dashboard
Route::get('/dashboard', [MainPagesController::class, 'dashboard']);
