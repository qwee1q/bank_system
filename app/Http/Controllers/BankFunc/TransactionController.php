<?php

namespace App\Http\Controllers\BankFunc;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{
    public function view_dashboard(){
        $user = auth()->user();
        return view('dashboard' , compact('user'));
    }
    public function index()
    {
        $user = Auth::user();

        $cards = $user->cards()->pluck('id')->toArray();

        $transactions = Transaction::whereIn('from_card_id', $cards)
            ->orWhereIn('to_card_id', $cards)
            ->orderBy('created_at', 'desc')
            ->get();

 return view('transaction_history', compact('transactions'));    }

    public function transaction_history()
{
    $transactions = Transaction::all(); // або тільки користувача: auth()->user()->transactions
    return view('transaction_history', compact('transactions'));
}

    

    public function detail($id){
        $user = auth()->user();
        return view('trans_detail' , compact('user','id'));
    }
    public function create()
    {
        $cards = auth()->user()->cards;
        return view('transfer', compact('cards'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'from_card_id' => 'required|exists:cards,id',
            'to_card_number' => 'required|string',
            'amount' => 'required|numeric|min:1',
        ]);

        $senderCard = Card::find($request->from_card_id);
        $receiverCard = Card::where('number', $request->to_card_number)->first();

        if (!$receiverCard) {
            return back()->with('error', 'Карта отримувача не знайдена');
        }

        if ($senderCard->type !== $receiverCard->type) {
            return back()->with('error', 'Переказ між різними типами карт заборонено');
        }

        if ($senderCard->balance < $request->amount) {
            return back()->with('error', 'Недостатньо коштів');
        }

        DB::transaction(function () use ($senderCard, $receiverCard, $request) {
            $senderCard->balance -= $request->amount;
            $senderCard->save();

            $receiverCard->balance += $request->amount;
            $receiverCard->save();

            Transaction::create([
                'from_card_id' => $senderCard->id,
                'to_card_id' => $receiverCard->id,
                'amount' => $request->amount,
                'status' => 'success',
            ]);
        });

        return back()->with('success', 'Переказ успішний');
    }

    public function view_transaction()
{
    $user = auth()->user();
    $cards = $user->cards;

    $transactions = Transaction::whereIn('from_card_id', $cards->pluck('id'))
        ->orWhereIn('to_card_id', $cards->pluck('id'))
        ->orderBy('created_at', 'desc')
        ->get();

        return view('transaction_history', compact('transactions' , 'cards'));
    }
    public function show($id)
    {
        $user = Auth::user();

        $transaction = Transaction::findOrFail($id);

        $userCardIds = $user->cards()->pluck('id')->toArray();
        if (!in_array($transaction->from_card_id, $userCardIds) &&
            !in_array($transaction->to_card_id, $userCardIds)) {
            abort(403, 'Ви не маєте доступу до цієї транзакції.');
        }

        $fromCard = Card::find($transaction->from_card_id);
        $toCard = Card::find($transaction->to_card_id);

return view('show', compact('transaction', 'fromCard', 'toCard'));
    }

}


