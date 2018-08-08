<?php

namespace App\Http\Controllers;
Use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CoinPayment;

class PaymentController extends Controller{
    
    public function ViewIndex(){
        return view('index');
    }
    public function makePayment($payload){
        $payload = CoinPayment::get_payload($payload);
        return $payload;
    }
    public function initiatePayment(Request $request){
        $trx['amountTotal'] = $request->amount; // USD
        $trx['note'] = 'Note for your transaction';
        $trx['items'][0] = [
          'descriptionItem' => 'Arb king deposit',
          'priceItem' => $request->amount, // USD
          'qtyItem' => 1,
          'subtotalItem' => $request->amount // USD
      ];
      // $coin = new CoinPaymentClass();
      $link_transaction = CoinPayment::url_payload($trx);
        // return view('admin.dashboard')->with('link_transaction', $link_transaction);
        return redirect()->to($link_transaction);
      
      }
    public function processPayment($payload){
        $account = MainAccount::where('user_id', '=', Auth::user()->id)->first();
        // $amount = $paymentDetails['data']['amount'] / 100;
        // $ref = $paymentDetails['data']['reference'];
        $amount = $payload['amount'];
        $ref = $payload['payment_id'];
        $money_shield = 0;
        if($amount <  20000){
            $money_shield = $amount * 0.5;
        }
        else{
            $money_shield = $amount * 0.6;
        }
        $total = $amount + $money_shield;
        if($account){
            if($account->status == Config::get('constants.account_status.active') || $account->status == Config::get('constants.account_status.inactive') || $account->total_amount < 200){
                $account->deposited_amount = $amount;
                $account->shield_amount = $money_shield;
                $account->total_amount += $total;
                $account->threshold_amount = $total * 3;
                $account->status = Config::get('constants.account_status.shielded');
                if($account->update() && $transaction->save()){
                    return redirect()->route('dashboard')->with('success','you funded your account successfully');
                }
                else{
                    return redirect()->route('dashboard')->with('fail','An error occured while trying to fund your account contact Investakers representative to resolve this issue.');
                }
            }
        }
        else{
            $account = new MainAccount();
            $account->deposited_amount = $amount;
            $account->shield_amount = $money_shield;
            $account->total_amount = $total;
            $account->threshold_amount = $total * 3;
            $account->account_status = Config::get('constants.account_status.shielded');
            $account->user_id = Auth::user()->id;
            $account->staked_amount = 0;
            if($account->save()){
                return redirect()->route('dashboard')->with('success','you funded your account successfully');
            }
            else{
                return redirect()->route('dashboard')->with('fail','An error occured while trying to fund your account contact Investakers representative to resolve this issue.');
            }
        }
    }

}