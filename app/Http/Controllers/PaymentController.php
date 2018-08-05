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
    public function processPayment($payload){
        $account = MainAccount::where('user_id', '=', Auth::user()->id)->first();
        $amount = $paymentDetails['data']['amount'] / 100;
        $ref = $paymentDetails['data']['reference'];
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
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->ref = $ref;
            $transaction->amount = $amount;
            $transaction->amount = Config::get('constants.status.confirmed');
            $transaction->bonus = $money_shield;
            if($account->update() && $transaction->save()){
                return redirect()->route('dashboard')->with('success','you funded your account successfully');
            }
            else{
                return redirect()->route('dashboard')->with('fail','An error occured while trying to fund your account contact Investakers representative to resolve this issue.');
            }
        }
        else{
            // $aux = AuxiliaryAccount::where('main_account_id', '=', $account->id)->first();
            // $aux->deposited_amount = $amount;
            // $aux->shield_amount = $money_shield;
            // $aux->total_amount = $total;
            // $aux->threshold_amount = $total * 3;
            // $aux->account_status = Config::get('constants.account_status.shielded');
            // $transaction = new Transaction();
            // $transaction->user_id = Auth::user()->id;
            // $transaction->ref = $ref;
            // $transaction->amount = $amount;
            // $transaction->amount = Config::get('constants.status.confirmed');
            // if($aux->update() && $transaction->save()){
            //     return redirect()->route('dashboard')->with('success','you funded your account successfully');
            // }
            // else{
            return redirect()->route('dashboard')->with('fail','Sorry you cannot fund your account while it is still shielded.');
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
        $account->save();
        // $aux = new AuxiliaryAccount();
        // $aux->main_account_id = $account->id;
        // $aux->user_id = Auth::user()->id;
        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->ref = $ref;
        $transaction->amount = $amount;
        $transaction->amount = Config::get('constants.status.confirmed');
        if($transaction->save()){
            return redirect()->route('dashboard')->with('success','you funded your account successfully');
        }
        else{
            return redirect()->route('dashboard')->with('fail','An error occured while trying to fund your account contact Investakers representative to resolve this issue.');
        }
    }
        return $payload;
    }

}