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
}