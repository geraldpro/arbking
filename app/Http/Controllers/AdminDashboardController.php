<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoinPayment;

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

  return view('admin.confirm-match');

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

}
