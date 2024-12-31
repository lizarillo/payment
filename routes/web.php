<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Http\Controllers\PaymentController;




// Root route - Select Payment Method
Route::get('/', function () {
    return view('payment_selection'); // Select Payment page
})->name('home');


Route::get('/payment-form', function () {
    return view('payment_form');
});


Route::get('/cod_payment', [PaymentController::class, 'showCodPayment'])->name('cod_payment');
Route::post('/payment-summary', [PaymentController::class, 'paymentSummary'])->name('payment-summary');

Route::get('/insert-payment', function () {
    DB::table('payments')->insert([
        'order_id' => 1,
        'payment_method' => 'GCASH',
        'payment_status' => 'Paid',
        'transaction_id' => 'TXT34567',
        'amount' => 700.00,
        'created_at' => now(),
    ]);

    return 'Payment inserted successfully!';
});

//

Route::get('/payment-method', [PaymentController::class, 'showPaymentMethod'])->name('payment.method');
Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment.process');


    Route::post('/payments/cod', function () {
        // Simulate COD payment process
        $payment = Payment::create([
            'order_id' => request('order_id'),
            'payment_method' => 'Cash on Delivery',
            'payment_status' => 'Pending',
            'transaction_id' => null,
            'amount' => request('amount'),
        ]);
    
        return response()->json([
            'message' => 'Payment recorded successfully. Pay cash on delivery.',
            'payment' => $payment
        ]);
    });


    Route::get('/payments/summary/{id}', function ($id) {
        $payment = Payment::findOrFail($id);
    
        return view('payment-summary', ['payment' => $payment]);
    });
    




  