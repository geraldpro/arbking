<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use Hexters\CoinPayment\Entities\cointpayment_log_trx;
use App\Stake;
use Auth;
use Config;


>>>>>>> 71291b1ac4f09278615bc913b7cba7c92b1440bd
class userDashboardController extends Controller{

//Get dashboard index
public function dashboard(){
  return view('user.dashboard');
}

//Get profile
public function profile(){
   return view('user.profile');
}

//Get change password
public function passwordreset(){
  return view('user.change-password');
}

//Get fund-my-account
public function fund(){
   return view('admin.fundwithdrawal-request');
}

//Get upload photo
public function upload_pic(){
   return view('user.upload-photo');
}

//Get pending user request
public function user_request(){
  return view('admin.pending-user-request');
}

//Get user activities
public function user_activities(){
  return view('admin.user-activities');
}

//Get view matches
public function view_matches(){
   return view('admin.view-matches');
}

//Get edit matches
public function edit_match(){
  return view('admin.edit-match');
}

//Get user fund deposit
public function fund_deposit(){
  return view('admin.user-fund-deposit');
}

//Get user fund account page
public function fund_account(){
<<<<<<< HEAD
  return view('user.fund-my-account');
=======
  $transactions = cointpayment_log_trx::where('status', 0 )->get();
  return view('user.fund-account')->with(compact('transactions'));
>>>>>>> 71291b1ac4f09278615bc913b7cba7c92b1440bd
}

//Get user Bonus Calculator
public function bonus_calculator(){
   return view('user.bonus-calculator');
}

//Get user verified earning
public function verified_earning(){
<<<<<<< HEAD
  return view('user.my-verified-earning');
=======
  $earnings = Stake::where('user_id', '=', Auth::user()->id)->where('status', '=', Config::get('constants.stake_status.won'))->get();
  return view('user.my-verified-earning')->with(compact('earnings'));
>>>>>>> 71291b1ac4f09278615bc913b7cba7c92b1440bd
}

//Get user trade history
public function trade_history(){
  return view('user.trade-history');
}

//Get user live pool status
public function livepool(){
   return view('user.livepool-status');
}

//Get user crypto wallet update
public function update_cryptodetails(){
   return view('user.update-financial-details');
}

//Get user Auto arbitrage
public function arbitrage(){
  return view('user.auto-arbitrage');
}

//Get user trading interface
public function trade(){
  return view('user.trade');
}

//Get user withdrawal page
public function fund_withdrawal(){
  return view('user.fund-withdrawal');
}

}
