<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_id',
        'transaction_status',
        'name',
        'email',
        'phone',
        'address',
        'order_notes',
        'amount',
    ];
}
