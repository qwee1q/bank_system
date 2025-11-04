<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('registration');

Route::post('/register',[RegisterController::class,'store'])->middleware('guest');

Route::get('/login',[LoginController::class,'create'])->middleware('guest')->name('login');

Route::post('/login',[LoginController::class,'store'])->middleware('guest');

Route::view('/dashboard','dashboard')->middleware('auth')->name('dashboard');
