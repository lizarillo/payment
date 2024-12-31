<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            'order_id' => 1,
            'payment_method' => 'GCASH',
            'payment_status' => 'Paid',
            'transaction_id' => 'TXT34567',
            'amount' => 700.00,
            'created_at' => Carbon::now(),
        ]);
    }
}
