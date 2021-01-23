<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('paymenttypes')->insert([
            ['paymenttype'=>'creditcart'],
            ['paymenttype'=>'ovo'],
        ]);
    }
}
