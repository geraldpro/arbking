<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class userDashboardController extends Controller{

//Get dashboard index
public function dashboard(){

  return view('user.dashboard');

}

//Get profile
public function profile(){

  return view('user.profile');

}

//Get finance
public function finance(){

  return view('user.finance');

}

//Get fund-my-account
public function fund(){

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
