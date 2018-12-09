<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Match;
use App\MainAccount;
use App\AuxiliaryAccount;
use App\Stake;
use App\GroupMatch;
use Illuminate\Support\Facades\Auth;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Hexters\CoinPayment\Http\Controllers\CoinPaymentController;
use \Illuminate\Support\Facades\Route;


class AdminStakeController extends Controller{
  public function createMatch(Request $request){
    $rules = array(
        'league' => 'required',
        'home_team' => 'required',
        'away_team' => 'required',
        'kickoff' => 'required',
        'selected_market' => 'required',
        'selected_odd' => 'required',
    );
    $validate = Validator::make($request->all(), $rules);
    if ($validate->fails()) {
        return redirect()->back()->withErrors($validate)->withInput();
    } else {
      $data = $request->all();
      $data['kickoff'] = new Carbon($request->get('kickoff'));
      $data['mode'] = 'single';
      $match = new Match();
      $match->fill($data);
      if($match->save()){
          return  redirect()->back()->withSuccess('You have successfully created a match');
      }
          return  redirect()->back()->withFail('an error occured while trying to create a match')->withInput();   
    }
  }
  public function createGroupMatch(Request $request){
    // $rules = array(
    //     'league' => 'required',
    //     'home_team' => 'required',
    //     'away_team' => 'required',
    //     'kickoff' => 'required',
    //     'selected_market' => 'required',
    //     'selected_odd' => 'required',
    // );
    // $validate = Validator::make($request->all(), $rules);
    // if ($validate->fails()) {
    //     return redirect()->back()->withErrors($validate)->withInput();
    // } else {
      $data = $request->all();
      $data['mode'] = 'group';
      // dd($data);
      try {
        $data['kickoff'] = new Carbon($request->get('kickoff'));
        $match = new Match();
        $match->fill($data);
        $match->save();
        $val = $data['selection-number'];
        for($i=0; $i <$val; $i++) {
          $match_group = new GroupMatch();
          $match_group->match_id = $match->id;
          $match_group->league = $data['league' . ($i+1)];
          $match_group->home_team = $data['home_team' . ($i+1)];
          $match_group->away_team = $data['away_team' . ($i+1)];
          $match_group->selected_market = $data['selected_market' . ($i+1)];
          $match_group->save();
        }
        return  redirect()->back()->withSuccess('You have successfully created a match');
      } catch(Exception $e) {
          return  redirect()->back()->withFail('an error occured while trying to create a match')->withInput();  
        }
  }
  public function editMatch(Request $request){
    $rules = array(
        'league' => 'required',
        'home_team' => 'required',
        'away_team' => 'required',
        'kickoff' => 'required',
        'selected_market' => 'required',
        'selected_odd' => 'required',
    );
    $validate = Validator::make($request->all(), $rules);
    if ($validate->fails()) {
        return redirect()->back()->withErrors($validate)->withInput();
    } else {
      $data = $request->all();
      $data['kickoff'] = new Carbon($request->get('kickoff'));
      $match = Match::find($request->get('id'));
      $match->fill($data);
      if($match->update()){
          return  redirect()->back()->withSuccess('You have successfully updated your match');
      }
          return  redirect()->back()->withFail('an error occured while trying to update your match')->withInput();   
    }
  }
  public function resolveWon($id){
    $match = Match::find($id);
    $req = Request::create('coinpayment/ajax/rates/1', 'GET');
    $rates = json_decode(Route::dispatch($req)->getContent());
    // dd($rates->coins_accept);
    $rate = Auth::user()->accountType->rate;
    foreach($match->stakes as $stake){
      if($stake->status == Config::get('constants.stake_status.staked')){
        $stake->status = Config::get('constants.stake_status.won');
        $stake->update();
        $account = MainAccount::where('user_id', '=', $stake->user_id)->first();
        if($account && $account->id){
        $account->total_amount = $account->total_amount + ($stake->yield_amount 
        * $rate);
        Log::info('account total now: '  .  ($account->total_amount)  .
        $account->total_amount   . ' added: ' . ($stake->yield_amount * $rate));
        if(($account->staked_amount * $rate) >= ($account->threshold_amount * $rate)){
          $account->withdrawable_amount = $account->total_amount * $rate;         
          $account->account_status = Config::get('constants.account_status.active');
          $account->update();
      }
      else {
        $account->update();
      }
      }
        }
    }
    $match->resolved = Config::get('constants.resolve_status.resolved');
    if($match->update()){
        return  redirect()->back()->withSuccess('You have successfully resolved the match');
    }
        return  redirect()->back()->withFail('an error occured while trying to resolve the match')->withInput();   
  }
  public function resolveLost($id){
    $match = Match::find($id);
    $req = Request::create('coinpayment/ajax/rates/1', 'GET');
    $rates = json_decode(Route::dispatch($req)->getContent());
    // dd($rates->coins_accept);
    $rate = Auth::user()->accountType->rate;
    foreach($match->stakes as $stake){
      if($stake->status == Config::get('constants.stake_status.staked')){
        $stake->status = Config::get('constants.stake_status.lost');
        $stake->update();
        $account = MainAccount::where('user_id', '=', $stake->user_id)->first();
   
        if(($account->staked_amount * $rate) >= ($account->threshold_amount * $rate)){
          $account->withdrawable_amount = $account->total_amount;         
          $account->account_status = Config::get('constants.account_status.active');
          $account->save();
        }
        else {
        $account->save();
        }
    }
  }
  $match->resolved = Config::get('constants.resolve_status.resolved');
  if($match->update()){
    return  redirect()->back()->withSuccess('You have successfully resolved the match');
  }
    return  redirect()->back()->withFail('an error occured while trying to resolve the match')->withInput();   
}
  public function resolveCancelled($id){
    
    $match = Match::find($id);
    $req = Request::create('coinpayment/ajax/rates/1', 'GET');
    $rates = json_decode(Route::dispatch($req)->getContent());
    // dd($rates->coins_accept);
    $rate = Auth::user()->accountType->rate;
    foreach($match->stakes as $stake){
      if($stake->status == Config::get('constants.stake_status.staked')){
        $stake->status = Config::get('constants.stake_status.cancelled');
        $stake->update();
        if($stake->user->account){
        $stake->user->account->total_amount += $stake->liability_amount * $rate;
        $stake->user->account->staked_amount -= $stake->liability_amount * $rate;
        $stake->user->account->total_amount->save();
        }
      }
    }
    $match->resolved = Config::get('constants.resolve_status.resolved');
    if($match->update()){
        return  redirect()->back()->withSuccess('You have successfully resolved the match');
    }
        return  redirect()->back()->withFail('an error occured while trying to resolve the match')->withInput();   
    }
}
