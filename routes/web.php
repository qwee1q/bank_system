<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[RegisterController::class,'create'])->name('registration');

Route::post('/register',[RegisterController::class,'store'])->name('registration');

Route::get('/login',[LoginController::class,'create'])->name('login');

Route::post('/login',[LoginController::class,'store'])->name('login');
