<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        // Fetch all transactions
        $transactions = Transaction::all();

        // Pass the transactions to the view
        return view('transactions.index', compact('transactions'));
    }
}
