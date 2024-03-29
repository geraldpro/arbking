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
//URL::forceScheme('https');
Route::get('/', 'HomeController@Viewindex');

/**** User Authentication routes******/
Route::get('login','UserController@login')->name('login');
Route::get('logout','UserController@logout')->name('logout');
Route::post('login','UserController@postLogin')->name('postLogin');
Route::get('register','UserController@register')->name('register');
Route::post('register','UserController@postSignup')->name('postRegister');
Route::get('passwordReset','UserController@passwordReset')->name('passReset');
Route::get('changePassword','UserController@changePassword')->name('changePass');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showresetForm');


/**** Admin Dashboard routes******/
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard','adminDashboardController@dashboard')->name('dashboard');
    Route::get('admin/create-match','adminDashboardController@creatmatch')->name('create-match');
    Route::post('admin/creatematch','AdminStakeController@createMatch')->name('createMatch');
    Route::post('admin/create-group-match','AdminStakeController@createGroupMatch')->name('createGroupMatch');
    Route::get('admin/edit-match/{id}','adminDashboardController@edit_match')->name('edit-match');
    Route::get('admin/update-livepool','adminDashboardController@update_livepool')->name('update-livepool');
    Route::post('user/arbitrage/close','ArbitrageController@closeTrade')->name('closeTrade');


    Route::get('admin/confirm-match','adminDashboardController@confirm_match')->name('confirm-match');
    Route::get('admin/user-profits','adminDashboardController@user_profits')->name('user-profits');
    Route::get('admin/fundwithdrawal-request','adminDashboardController@fundwithdrawalrequest')->name('fundwithdrawal-request');
	Route::get('admin/pending-junior-request','adminDashboardController@junior_request')->name('pending-junior-request');
    Route::get('admin/pending-user-request','adminDashboardController@user_request')->name('pending-user-request');
    Route::get('admin/user-activities','adminDashboardController@user_activities')->name('user-activities');
    Route::get('admin/view-matches','adminDashboardController@view_matches')->name('view-matches');
    Route::get('admin/user-fund-deposit','adminDashboardController@fund_deposit')->name('user-fund-deposit');
    Route::post('admin/editmatch','AdminStakeController@editMatch')->name('editMatch');
    Route::get('admin/resolve/won/{id}','AdminStakeController@resolveWon');
    Route::get('admin/resolve/lost/{id}','AdminStakeController@resolveLost');
    Route::get('admin/resolve/cancelled/{id}','AdminStakeController@resolveCancelled');
});

/**** User Dashboard routes******/
Route::middleware(['auth',  'regular'])->group(function () {
    Route::get('user/dashboard','UserDashboardController@dashboard')->name('dashboard');
    Route::get('user/profile','UserDashboardController@profile')->name('profile');
    Route::get('user/fund-my-account','UserDashboardController@fund_account')->name('fund-my-account');
    Route::get('user/earning','UserDashboardController@earning')->name('earning');
    Route::get('user/change-password','UserDashboardController@passwordreset')->name('passwordreset');
    Route::get('user/trade-history','UserDashboardController@trade_history')->name('trade-history');
    Route::get('user/request-payout','UserDashboardController@request_payout')->name('request-payout');
    Route::get('user/bonus-calculator','UserDashboardController@bonus_calculator')->name('bonus-calculator');
    Route::get('user/my-verified-earning','UserDashboardController@verified_earning')->name('my-verified-earning');
    Route::post('user/initiate_payment', 'PaymentController@initiatePayment')->name('initiatePayment');
    Route::post('user/create_withdrawal', 'PaymentController@create_withdrawal')->name('create_withdrawal');
    Route::get('user/upload-photo','UserDashboardController@upload_pic')->name('upload_pic');
    Route::get('user/update-financial-details','UserDashboardController@update_cryptodetails')->name('updatecrypto');
    // Route::get('user/trade','UserDashboardController@trade')->name('trade');
    Route::get('user/fund-withdrawal','UserDashboardController@fund_withdrawal')->name('fund-withdrawal');
    // Route::get('user/trade','UserDashboardController@trade')->name('trade');
    Route::get('coinpayment/{payload}', 'PaymentController@makePayment')->name('makeTransaction');

    //  trade/arbitrage routes
    Route::middleware([ 'confirmed'])->group(function () {
        Route::get('user/trade','StakeController@trade')->name('trade');
        Route::get('user/resolve/{lay}/{back}/{total}', 'StakeController@resolveStake');
        Route::post('user/stake', 'StakeController@addStake')->name('addStake');
        Route::get('user/arbitrage/activate/{id}','ArbitrageController@activateArbitrage');
        Route::get('user/arbitrage/deactivate/{id}','ArbitrageController@deactivateArbitrage');
        Route::get('user/auto-arbitrage','UserDashboardController@arbitrage')->name('arbitrage');
        Route::get('user/livepool-status','UserDashboardController@livepool')->name('livepool');
    });


    //User Profile routes
    Route::get('user/profile', 'UserDashboardController@profile');
    Route::post('user/profile/update', 'ProfileController@updateProfile')->name('updateProfile');
    Route::post('user/profile/password/update', 'ProfileController@updatePassword')->name('updatePassword');
    Route::post('user/profile/picture/update', 'ProfileController@changePicture')->name('changePicture');


    //arbitrage routes

    // password reset and email confirmation
    Route::get('register/verify/{confirmationCode}', 'UserController@getConfirmation')->name('confirmation_path');
    Route::get('user/reconfirm', 'UserController@reconfirm')->name('reconfirm');
    Route::post('register/verify/again', 'UserController@confirmAgain')->name('confirmAgain');
});







