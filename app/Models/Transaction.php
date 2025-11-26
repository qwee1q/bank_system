<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;
     protected $fillable = [
        'from_card_id',
        'to_card_id',
        'amount',
        'status'
    ];
    
    public function fromCard()
    {
        return $this->belongsTo(Card::class, 'from_card_id');
    }

    public function toCard()
    {
        return $this->belongsTo(Card::class, 'to_card_id');
    }
    public function senderCard() {
        return $this->belongsTo(Card::class, 'from_card_id');
    }

    public function receiverCard() {
        return $this->belongsTo(Card::class, 'to_card_id');
    }

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
