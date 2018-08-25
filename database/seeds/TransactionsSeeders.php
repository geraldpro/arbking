<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
               'user_id' => 1,
               'payment_id' => 'CPCH1AG7WJZVPQN6FG5LPACNSF',
               'payment_address' => '0x19d23E56e10054004d27DaB10995df61D6e3CF42',
               'coin' => 'BTC',
               'fiat' => 'USD',
               'status_text' => 'pending',
                'status' => 0,
                'payment_created_at' => Carbon::now(),
                'expired' => Carbon::now()->addDays(7),
                'amount' => 0.01223948,
                'confirms_needed' => 3,
                'status_url' => 'https://www.coinpayments.net/index.php?cmd=acct_pmt_details&id=CPCH1AG7WJZVPQN6FG5LPACNSF',
                'qrcode_url' => 'https://www.coinpayments.net/index.php?cmd=acct_pmt_details&id=CPCH1AG7WJZVPQN6FG5LPACNSF',
                'payload' => 'sample payload'
              ),        //    array(
        //        'id' => 2,
        //        'name' => 'Litecoin',
        //        'short_name' => 'LTC',
        //        'icon' => 'https://www.coinpayments.net/images/coins/LTC.png',
        //        'rate' => 0.00
        //       ),
        //    array(
        //        'id' => 3,
        //        'name' => 'Ether',
        //        'short_name' => 'ETH',
        //        'icon' => 'https://www.coinpayments.net/images/coins/ETH.png',
        //        'rate' => 0.00
        //    ),
        //    array(
        //        'id' => 4,
        //        'name' => 'Monero',
        //        'short_name' => 'XMR',
        //        'icon' => 'https://www.coinpayments.net/images/coins/XMR.png',
        //        'rate' => 0.00
        //       )
         ));
     }

}
