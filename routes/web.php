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
Route::get('login','UserController@login')->name('login');
Route::post('login','UserController@postLogin')->name('postLogin');
Route::get('register','UserController@register')->name('register');
Route::post('register','UserController@postSignup')->name('postRegister');
Route::get('coinpayment/{payload}', 'PaymentController@makePayment')->name('makeTransaction');

/**** Admin Dashboard routes******/
Route::get('admin/dashboard','AdminDashboardController@dashboard')->name('dashboard');
    Route::get('admin/create-match','AdminDashboardController@creatmatch')->name('create-match');
    Route::get('admin/edit-match','AdminDashboardController@edit_match')->name('edit-match');

    Route::get('admin/confirm-match','AdminDashboardController@confirm_match')->name('confirm-match');
    Route::get('admin/fundwithdrawal-request','AdminDashboardController@fundwithdrawalrequest')->name('fundwithdrawal-request');
	Route::get('admin/pending-junior-request','AdminDashboardController@junior_request')->name('pending-junior-request');
    Route::get('admin/pending-user-request','AdminDashboardController@user_request')->name('pending-user-request');
    Route::get('admin/user-activities','AdminDashboardController@user_activities')->name('user-activities');
    Route::get('admin/view-matches','AdminDashboardController@view_matches')->name('view-matches');
    Route::get('admin/user-fund-deposit','AdminDashboardController@fund_deposit')->name('user-fund-deposit');


    
    