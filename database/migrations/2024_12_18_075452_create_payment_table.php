<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');                       // Primary Key
            $table->integer('order_id');                    // Foreign key or reference
            $table->string('payment_method', 255);          // Cash on Delivery
            $table->string('payment_status', 255);          // Paid, Pending, etc.
            $table->string('transaction_id', 255);          //You can set any value like 'COD' or 'N/A
            
            $table->timestamps();                           // created_at and updated_at
        });
    }

   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
       
      
    }
};
