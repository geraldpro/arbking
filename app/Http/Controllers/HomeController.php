<?php

namespace App\Http\Controllers;
Use App\Http\Controllers\Controller;

class HomeController extends Controller{
    
public function ViewIndex(){
    return view('index');
}

}