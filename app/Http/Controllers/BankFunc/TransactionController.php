<?php

namespace App\Http\Controllers\BankFunc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function view_dashboard(){
        return view('dashboard');
    }
}
