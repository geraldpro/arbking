<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Match;
use App\MainAccount;
use App\AuxiliaryAccount;
use App\Stake;
use Illuminate\Support\Facades\Auth;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


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
      $match = new Match();
      $match->fill($data);
      if($match->save()){
          return  redirect()->back()->withSuccess('You have successfully created a match');
      }
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
    foreach($match->stakes as $stake){
      if($stake->status == Config::get('constants.stake_status.staked')){
        $stake->status = Config::get('constants.stake_status.won');
        $stake->update();
        $account = MainAccount::where('user_id', '=', $stake->user_id)->first();
        if($account && $account->id){
        $account->total_amount = $account->total_amount + $stake->yield_amount;
        if($account->staked_amount >= $account->threshold_amount){
          $account->withdrawable_amount = $account->total_amount;         
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
    foreach($match->stakes as $stake){
      if($stake->status == Config::get('constants.stake_status.staked')){
        $stake->status = Config::get('constants.stake_status.lost');
        $stake->update();
        $account = MainAccount::where('user_id', '=', $stake->user_id)->first();
   
        if($account->staked_amount >= $account->threshold_amount){
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
    foreach($match->stakes as $stake){
      if($stake->status == Config::get('constants.stake_status.staked')){
        $stake->status = Config::get('constants.stake_status.cancelled');
        $stake->update();
        if($stake->user->account){
        $stake->user->account->total_amount += $stake->liability_amount;
        $stake->user->account->staked_amount -= $stake->liability_amount;
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
