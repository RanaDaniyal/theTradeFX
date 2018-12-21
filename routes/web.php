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

Route::get('/', function () {
    return view('welcome');
})->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Navigation Controller
Route::get('/MT-5/Desktop/download', 'NavigationController@MT5_pc')->name('mt5_pc');
Route::get('/MT-5/Mobile/download', 'NavigationController@MT5_mob')->name('mt5_mob');
Route::get('/Account-type/Micro-Account', 'NavigationController@mic_acc')->name('micro_acc');
Route::get('/Account-type/Standrad-Account', 'NavigationController@std_acc')->name('std_acc');
Route::get('/Account-type/VIP-Account', 'NavigationController@vip_acc')->name('vip_acc');
Route::get('/introducingBroker', 'NavigationController@intro_brok')->name('intro_brok');
Route::get('/affilateProgram', 'NavigationController@affiliate_prog')->name('affiliate_prog');

//Route::resource('liveaccount','LiveAccountController');
Route::get('/createLiveAccount','liveAccountController@index')->name('live_account');
Route::post('/createLiveAccount','liveAccountController@store')->name('createLiveAccount');
Route::get('/dashboard', 'LiveDashboardController@dashboardView')->name('dashboard');

Route::get('admin/login',function (){
    return view('admin.login');
});

Route::get('/admin/dashbaord','AdminController@index')->name('AdminDashboard');
Route::get('/loginOpt','NavigationController@login_opt')->name('loginOption');

Route::middleware(['live'])->group(function(){
    Route::get('/dashboard', 'LiveDashboardController@dashboardView')->name('dashboard');

});Route::middleware(['demo'])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
});

//testinf Routes
Route::get('/test', function ()
{
    return view('dashboard.dashboard');
});
