<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Match;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Image;
use App\Arbitrage;
use App\ArbitrageRequest;
use App\ArbitrageProceed;
use Config;
use Carbon\Carbon;

class ArbitrageController extends Controller{

//Get dashboard index

// public function activateArbitrage(){
//   $user = Auth::user();
//   return view('user.profile')->with(compact('user'));
// }
public function activateArbitrage($id){
        $arbitrage = Arbitrage::find($id);
        $arbitrage_request = new ArbitrageRequest();
        $arbitrage_request->arbitrage_id = $id;
            if ( $arbitrage_request->save()) {
                return redirect()->back()->with('success', 'Auto Arabitrage activated successfully');
            } else {
                return  redirect()->back()->with('fail', 'an error occured while trying to Activate your auto arbitrage');
            }
 }

 public function deactivateArbitrage($id){
  $arbitrage = Arbitrage::find($id);
  $arbitrage_request = new ArbitrageRequest();
  $arbitrage_request->arbitrage_id = $id;
  $arbitrage_request->type = Config::get('constants.arbitrage_request_text.type.deactivate');
      if ( $arbitrage_request->save()) {
          return redirect()->back()->with('success', 'Auto Arabitrage activated successfully');
      } else {
          return  redirect()->back()->with('fail', 'an error occured while trying to Activate your auto arbitrage');
      }
}

public function closeTrade(Request $req){
    $validate = Validator::make($req->all(), array(
        'margin' => 'required|numeric|max:100',
        'closure' => 'required|numeric|min:24|max:72'
    ));
    if ($validate->fails()) {
        return back()->withErrors($validate)->withInput();
    } else {
        $margin = $req->margin;
        $closure = $req->closure;
        $old_proceed = ArbitrageProceed::where('status',  Config::get('constants.arbitrage_proceeds_status_text.current'))->first();
        $old_balance = $old_proceed ? $old_proceed->closing_balance : 0;
        $old_balance = intval($old_balance);
        $new_balance = $old_balance;
        $new_balance += $old_balance == 0 ? 0  :  round((($old_balance * $margin)/100), 2); 
        // variables for calculator total amount pulled in or out by users
        $total_out =  0;
        $total_in = 0;
        // variable for next closure
        $closure = Carbon::now()->addHours($closure);
        $proceed = new ArbitrageProceed();
        $requests = ArbitrageRequest::where('status', Config::get('constants.arbitrage_request_text.status.pending') )->get();
        // $arbitrage_request->type = Config::get('constants.arbitrage_request_text.type.deactivate');
        $arbitrages = Arbitrage::where('status',  Config::get('constants.arbitrage_status_text.active'))->get();
        // dd('arbitrages', count($arbitrages), 'requests', count($requests));
        foreach($arbitrages as $arbitrage ) {
            $arbitrage->balance +=  round((($arbitrage->balance * $margin)/100), 2);
            $arbitrage->margin = $margin;
            $arbitrage->closure = $closure;
            $arbitrage->save();
        }
        foreach($requests as $request) {
            if($request->type ==  Config::get('constants.arbitrage_request_text.type.deactivate')) {
            $request->status =  Config::get('constants.arbitrage_request_text.status.resolved');
            $amount = round(($request->arbitrage->balance / Auth::user()->accountType->rate),2);
            $total_out += $amount;
            // dd($amout, $total_out, 'out');
            $request->arbitrage->status = Config::get('constants.arbitrage_status_text.inactive');
            $request->arbitrage->save();
            $request->save();
            }
            else {
            $request->status =  Config::get('constants.arbitrage_request_text.status.resolved');
            $amount = round(($request->arbitrage->balance / Auth::user()->accountType->rate),2);
            $total_in += $amount; 
            // dd($amount, $total_in, 'in', $request->arbitrage->balance);
            $request->arbitrage->closure = $closure;
            $request->arbitrage->status = Config::get('constants.arbitrage_status_text.active');
            $request->arbitrage->save();
            $request->save();
            }
        }
        // dd($total_in, $total_out);
        $new_balance = round(($new_balance - $total_out),2);
        $new_balance = round(($new_balance + $total_in),2);
        if($old_proceed) {
            $old_proceed->status = Config::get('constants.arbitrage_proceeds_status_text.closed');
            $old_proceed->save();
        }
        $proceed->opening_balance = $old_balance;
        $proceed->closing_balance = $new_balance;
        $proceed->closing_time = $closure;
        $proceed->pull_in = $total_in;
        $proceed->pull_out = $total_out;
        $proceed->user_count = count($arbitrages);
        $proceed->margin = $margin;
        $proceed->status = Config::get('constants.arbitrage_proceeds_status_text.current');
            if ( $proceed->save()) {
                return redirect()->back()->with('success', 'Closed Arbitrage successfully');
            } else {
                return  redirect()->back()->with('fail', 'an error occured while trying to close arbitrage');
            }
        }
    }
}
