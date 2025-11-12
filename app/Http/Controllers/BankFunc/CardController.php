<?php

namespace App\Http\Controllers\BankFunc;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function view(){
        $user = auth()->user();
        return view('dashboard',compact('user'));
    }

    public function create(Request $request){
        $user = auth()->user();

        $user->cards()->create([
            'number' => $request->number,
            'balance' => $request->balance,
            'type' => $request->type,
            'currency' => $request->currency,
        ]);

        return redirect('/dashboard');
    }
}
