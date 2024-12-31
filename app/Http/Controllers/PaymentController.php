<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Transaction;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showCodPayment()
    {
        return view('cod_payment');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showPaymentSummary(Request $request)
    {
        // Validate and process payment data (if needed)
        $validated = $request->validate([
            'amount' => 'required|numeric',
        ]);

        // Pass data to the summary page
        return view('payment-summary', ['amount' => $validated['amount']]);
    }

    
   



    public function paymentSummary(Request $request)
{

     // Validate input data (you can add more fields if necessary)
     $validated = $request->validate([
        'order_id' => 'required|integer',
        'amount' => 'required|numeric',
    ]);
    // Mock payment data for demonstration
    $payment = (object) [
        'order_id' => $request->input('order_id'),
        'payment_method' => 'Cash on Delivery',
        'payment_status' => 'Pending',
        'amount' => $request->input('amount'),
    ];

    // Pass $payment to the view
    return view('payment-summary', compact('payment'));
}


    public function insertPayment()
    {
        DB::table('payments')->insert([
            'order_id' => 1,
            'payment_method' => 'Cash on Delivery',
            'payment_status' => 'Pending',
            'transaction_id' => 'COD',
            'amount' => 234,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return 'Payment inserted successfully!';
    }

}


