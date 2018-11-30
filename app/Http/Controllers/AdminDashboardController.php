<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoinPayment;
use App\Match;

class adminDashboardController extends Controller{

//Get dashboard index
public function dashboard(){
  $trx['amountTotal'] = 0.5; // USD
  $trx['note'] = 'Note for your transaction';
  $trx['items'][0] = [
    'descriptionItem' => 'Arb king deposite',
    'priceItem' => 0.5, // USD
    'qtyItem' => 1,
    'subtotalItem' => 0.5 // USD
];
// $coin = new CoinPaymentClass();
$link_transaction = CoinPayment::url_payload($trx);
  return view('admin.dashboard')->with('link_transaction', $link_transaction);

}

//Get match creation form
public function creatmatch(){

  return view('admin.create-match');

}

//Get confirm match
public function confirm_match(){
  $matches = Match::where('resolved', '=', '0')->get();
  return view('admin.confirm-match')->with(compact('matches'));

}

//Get fund withdrawal request
public function fundwithdrawalrequest(){

  return view('admin.fundwithdrawal-request');

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
  $matches = Match::where('resolved', '=', '0')->get();
  return view('admin.view-matches')->with(compact('matches'));

}

//Get edit matches
public function edit_match($id){
  $match = Match::find($id);
  return view('admin.edit-match')->with(compact('match'));
}

//Get user fund deposit
public function fund_deposit(){

  return view('admin.user-fund-deposit');

}

//Get user profits
public function user_profits(){

  return view('admin.user-profits');

}
}
