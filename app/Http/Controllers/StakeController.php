<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Match;
use App\Stake;
use Illuminate\Support\Facades\Auth;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hexters\CoinPayment\Http\Controllers\CoinPaymentController;
use Carbon\Carbon;
use \Illuminate\Support\Facades\Route;


class StakeController extends Controller{
	
  public function trade(){
    $match = Match::where('current', '=', 1)->where('kickoff', '>', Carbon::now())->where('resolved', '=', 0)->first();
    $stake = Stake::where('user_id', '=', Auth::user()->id)->where('status', '=', 0)->first();
    if($stake){
      $match = $stake->match;
      if($match->kickoff < Carbon::now()){
       $stake->status = Config::get('constants.stake_status.disabled');
       $stake->update();
      }
     return view('user.trade')->with(compact('match'));
      return view('user.trade');
    }
    if(!$match){
      $match = Match::where('current', '=', 0)->where('kickoff', '>', Carbon::now())->first();
      if(!$match){
        return view('user.trade')->with('fail','cannot match you with a bet right now as there are no available matches checkback as matches will soon  be updated.');
      }
    }
      $match->current = 0;
      $match->save();
      $new_current = Match::find($match->id + 1);
      if($new_current){
        $new_current->current = 1;
        $new_current->save();
      }
    $new_stake = new Stake();
    $new_stake->user_id = Auth::user()->id;
    $new_stake->match_id = $match->id;
    $new_stake->save();
    return view('user.trade')->with(compact('match'));

  }
  public function testTrade(){
    return view('user.test-trade');
  }
  public function resolveStake($lay, $back, $total)
  {
    $lay = $lay;
    $back = $back;
    $total = $total;
  
    $total_odd = $lay + $back;
    $lay_percentage =round(($back/$total_odd) * 100, 2);
    $back_percentage = round(($lay/$total_odd) * 100, 2);
    // dd($lay_percentage, $back_percentage, $back);
    $total_stake = round(($total * 100) / $lay_percentage, 2);
    // dd($total_stake, $lay_percentage, $back_percentage);
    $back_amount = round($total_stake * ($back_percentage / 100), 2);
    $back_win = round(round($back_amount * (float)$back) - $back_amount, 2); 
    // dd($back_amount, $back_win);
    $back_lose = $back_amount;
    $lay_win = (int)$total;
    $lay_lose = round(round($total * $lay, 2) - $total, 2);
    // dd($lay_win, $back_lose, $back_win, $lay_lose);
    $i_total = round($lay_win - $back_lose, 2);
    $b_total = round($back_win - $lay_lose, 2);
    // $lay_amount = round(($back_percentage * $total)/100);
    // $back_amount = round(($lay_percentage * $total)/100);
    // dd($lay_amount, $back_amount);
    $res = ['lay'=>$total, 'back' => $back_amount, 'lay_win' => $lay_win, 'lay_lose' => $lay_lose,
     'back_win' => $back_win, 'back_lose' => $back_lose, 'i_total' => $i_total, 'b_total' => $b_total];
      return response()->json($res);
  }
  public function addStake(Request $request){
    // dd($request);
    $rules = array(
        'amount' => 'required:max:500',
        'match_id' => 'required',
    );
    // $rates = CoinPaymentController::ajax_rates(1);
    $req = Request::create('coinpayment/ajax/rates/1', 'GET');
    $rates = json_decode(Route::dispatch($req)->getContent());
    // dd($rates->coins_accept);
    $rate = Auth::user()->accountType->rate;
    $validate = Validator::make($request->all(), $rules);
    if ($validate->fails()) {
        return redirect()->back()->withErrors($validate)->withInput();
    } else {
        $user = Auth::user();
        $account = $user->account;
        $amount = $request->get('amount');
        $lay = $request->get('lay');
        $yield = $amount * $lay;
        $liability = $yield - $amount;
        if(count($account) < 1){
          return  redirect()->route('fund-my-account')->with('fail','you need to fund your account before you can place bets')->withInput();
        }
        // $rate = 
        
        if($account && $account->total_amount/$rate < $liability || $liability < 1){
          return  redirect()->back()->with('fail','you do not have enough money to make the trade or you staked less than 50 naira. please adjust your value and retry.')->withInput();
        }
        $data = $request->all();
        $match = Match::find($request->get('match_id'));
        $stake = Stake::where('user_id', '=', Auth::user()->id)->where('status', '=', 0)->first();
        $data['status'] = Config::get('constants.stake_status.staked');
        $data['stake_amount'] = $request->get('amount');
        $data['yield_amount'] = $yield;
        $data['liability_amount'] = $liability;
        $stake->fill($data);
        // if($liability > $account->total_amount){
        //   $account->total_amount = 0;
        //   $balance = $liability - $account->total_amount;
        //   $account->auxiliary->total_amount -= $balance;
        //   $account->update();
        //   $account->auxiliary->update();
        // }
        // else{
        $account->total_amount -= $liability  *  $rate ; 
        $account->staked_amount += $liability  *  $rate;
        if($account->status == 'active'){
          $account->withdrawable_amount = $account->total_amount;
        }
        $account->update();
        // }
        // $account->staked_amount += $request->get('amount');
        // if($account->staked_amount >= $account->threshold_amount){
        //   $account->withdrawable_amount += $account->total_amount;
        //   $account->status = Config::get('constants.account_status.active');
        // }
        if ($stake->update()) {
            // return Redirect::route('getSignup')->with('success', 'you registered successfully please check your email for your account activation mail');
            return redirect()->route('dashboard')->with('success','you successfully placed your bet');
        } else {
        //     return Redirect::route('getSignup')->with('fail', 'an error occurred while creating your profile');
            return  redirect()->back()->with('fail','an error occured while trying to place your bet')->withInput();
        }
    }  
  }
}
