<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@Viewindex');

/**** User Authentication routes******/
Route::get('login','AdminController@login')->name('login');
Route::get('register','AdminController@register')->name('register');