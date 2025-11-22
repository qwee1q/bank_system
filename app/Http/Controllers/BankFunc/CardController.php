<?php

namespace App\Http\Controllers\BankFunc;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function view(){
        $user = auth()->user();
        return view('card',compact('user'));
    }

    public function store(Request $request){
        $request->validate([
            'type' => 'string|required|in:Visa,MasterCard',
            'currency' => 'string|required',
        ]);

        $user = auth()->user();

        $faker = Faker::create();

        $number = $faker->creditCardNumber();

        $balance = 0;

        $user->cards()->create([
            'number' => $number,
            'balance' => $balance,
            'type' => $request->type,
            'currency' => $request->currency,
        ]);

        return redirect('/card');
    }

    public function detail($id){
        $user = auth()->user();
        return view('card_detail',compact('user','id'));
    }
}
