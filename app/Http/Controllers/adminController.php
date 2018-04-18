<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class AdminController extends Controller{

//Get user login page
public function login(){
  return view('useradmin.login');
}

//Get user register page
public function register(){
  return view('useradmin.register');
}




}
