<?php

namespace App\Http\Controllers;
Use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CoinPayment;
use App\Withdrawal;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Config;

class PaymentController extends Controller{
    
    public function ViewIndex(){
        return view('index');
    }
    public function makePayment($payload){
        $payload = CoinPayment::get_payload($payload);
        return $payload;
    }
    public function initiatePayment(Request $request){
        $request->session()->put($request->mode);
        $rules = array(
            'amount' => 'required|numeric|min:10',
        );

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
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
    public function create_withdrawal(Request $req){

        $validate = Validator::make($req->all(), array(
			'amount' => 'required|numeric',
            'payment_method' => 'required|min:3|max:3',
            'address' => 'required|min:50|max:150'
		));
		if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
		} else {
  
        $params = [
          'amount' => $req->amount,
          'currency' =>  $req->payment_method,
          'address' => $req->address
        ];
        // $params = [
        //     'id' => $req->id
        //   ];  
        $withdraw = CoinPayment::api_call('create_withdrawal', $params);
        // $withdraw = CoinPayment::api_call('get_withdrawal_info', $params);
        // dd($withdraw);
        $user = Auth::user();
        $withdrawal = new Withdrawal();
        $withdrawal->user_id = $user->id;
        $withdrawal->withdrawal_id = $withdraw['result']['id'];
        $withdrawal->wallet_address = $req->address;
        $withdrawal->coin = $req->payment_method;
        $withdrawal->status = $withdraw['result']['status'];
        $withdrawal->status_text =  Config::get('constants.withdrawal_status.' .  $withdraw['result']['status']) ;
        $withdrawal->time_created = Carbon::now();
        $withdrawal->amount =  (float) $withdraw['result']['amount'];
        $withdrawal->mode = $request->session()->get('mode') ?  $request->session()->get('mode') : 'main';
        $withdrawal->withrawal_fee = 0.00;
        $withdrawal->payload = '[]';
        if ($request->session()->get('mode')){
            $account = $user->arbitrage;
            $account->balance -= $request->amount; 
            $account->update();
        }
        else {
            $account = $user->account;
            $account->total_amount -= $request->amount; 
            $account->update();
        }
        $request->session()->forget('mode');
        if ($withdrawal->save() ) {
            return  redirect()->back()->with('success', 'withdrawal successful check your withdrawal history and wallet for confirmation')->withInput();
        }
        else {
            return  redirect()->back()->with('fail', 'An error occured while trying to process withdrawal');
        }
       }
     }
     public function get_withdrawals(Request $req){
        $user = Auth::user();
        $withdrawal = Withdrawal::where('user_id' , '=', $user->id)->orWhere('status' , '=', 1)->orWhere('status' , '=', 0)->first();
         $params = [
            'id' => $withdrawal->id
          ];  
        $withdraw = CoinPayment::api_call('get_withdrawal_info', $params);
        // dd($withdraw);
        // $withdrawal = new Withdrawal();
        $withdrawal->status = $withdraw['result']['status'];
        $withdrawal->status_text =  Config::get('constants.withdrawal_status.' .  $withdraw['result']['status']) ;
        $withdrawal->update();
        $withdrawals = Withdrawal::where('user_id', '=',  $user->id)->get();
            return view('user.withdrawal')->with(compact('withdrawals'));
     }

}