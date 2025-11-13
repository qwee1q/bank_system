<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BankFunc\CardController;
use App\Http\Controllers\BankFunc\TransactionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('registration');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');


Route::get('/login',[LoginController::class,'create'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'store'])->middleware('guest');

Route::get('/logout',[LogoutController::class,'log'])->middleware('auth')->name('logout');

Route::get('/dashboard',[TransactionController::class,'view_dashboard'])->middleware('auth')->name('trans_dashboard');

Route::get('/transaction',[TransactionController::class,'view_transaction'])->middleware('auth')->name('transaction');

Route::get('/card',[CardController::class,'view'])->middleware('auth')->name('cards');
