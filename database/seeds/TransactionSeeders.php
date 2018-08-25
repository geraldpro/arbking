<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('cointpayment_log_trxes')->insert(array(

           array(
               'id' => 1,
               'name' => 'Bitcoin',
               'short_name' => 'BTC',
               'icon' => 'https://www.coinpayments.net/images/coins/BTC.png',
               'rate' => 0.00
              ),
           array(
               'id' => 2,
               'name' => 'Litecoin',
               'short_name' => 'LTC',
               'icon' => 'https://www.coinpayments.net/images/coins/LTC.png',
               'rate' => 0.00
              ),
           array(
               'id' => 3,
               'name' => 'Ether',
               'short_name' => 'ETH',
               'icon' => 'https://www.coinpayments.net/images/coins/ETH.png',
               'rate' => 0.00
           ),
           array(
               'id' => 4,
               'name' => 'Monero',
               'short_name' => 'XMR',
               'icon' => 'https://www.coinpayments.net/images/coins/XMR.png',
               'rate' => 0.00
              )
         ));
     }

}
