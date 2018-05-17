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


    
    