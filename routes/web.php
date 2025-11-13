<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BankFunc\CardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('registration');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');


Route::get('/login',[LoginController::class,'create'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'store'])->middleware('guest');

Route::get('/logout',[LogoutController::class,'log'])->middleware('auth')->name('logout');

Route::get('/dashboard',[CardController::class,'view'])->middleware('auth')->name('test');
Route::post('/dashboard',[CardController::class,'create'])->middleware('auth')->name('test');
