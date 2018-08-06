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
Route::get('login','adminDashboardController@login')->name('login');
Route::get('register','adminDashboardController@register')->name('register');


/**** Admin Dashboard routes******/
    Route::get('admin/dashboard','adminDashboardController@dashboard')->name('dashboard');
    Route::get('admin/create-match','adminDashboardController@creatmatch')->name('create-match');
    Route::get('admin/edit-match','adminDashboardController@edit_match')->name('edit-match');

    Route::get('admin/confirm-match','adminDashboardController@confirm_match')->name('confirm-match');
    Route::get('admin/fundwithdrawal-request','adminDashboardController@fundwithdrawalrequest')->name('fundwithdrawal-request');
	Route::get('admin/pending-junior-request','adminDashboardController@junior_request')->name('pending-junior-request');
    Route::get('admin/pending-user-request','adminDashboardController@user_request')->name('pending-user-request');
    Route::get('admin/user-activities','adminDashboardController@user_activities')->name('user-activities');
    Route::get('admin/view-matches','adminDashboardController@view_matches')->name('view-matches');
    Route::get('admin/user-fund-deposit','adminDashboardController@fund_deposit')->name('user-fund-deposit');

/**** User Dashboard routes******/
    Route::get('user/dashboard','userDashboardController@dashboard')->name('dashboard');
    Route::get('user/profile','userDashboardController@profile')->name('profile');
    Route::get('user/fund-my-account','userDashboardController@fund_account')->name('fund-my-account');
    Route::get('user/earning','userDashboardController@earning')->name('earning');
    Route::get('user/change-password','userDashboardController@passwordreset')->name('passwordreset');
    Route::get('user/trade-history','userDashboardController@trade_history')->name('trade-history');
    Route::get('user/request-payout','userDashboardController@request_payout')->name('request-payout');
    Route::get('user/bonus-calculator','userDashboardController@bonus_calculator')->name('bonus-calculator');
    Route::get('user/my-verified-earning','userDashboardController@verified_earning')->name('my-verified-earning');
    Route::get('user/livepool-status','userDashboardController@livepool')->name('livepool');
    Route::get('user/auto-arbitrage','userDashboardController@arbitrage')->name('arbitrage');
    Route::get('user/upload-photo','userDashboardController@upload_pic')->name('upload_pic');
    Route::get('user/update-financial-details','userDashboardController@update_cryptodetails')->name('updatecrypto');







  
    