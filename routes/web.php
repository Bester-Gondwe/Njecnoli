<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.index');
})->name('home');

//REGISTER ROUTE
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

//LOGIN ROUTES
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);

