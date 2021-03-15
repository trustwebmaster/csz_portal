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

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Voyager as VoyagerVoyager;

Route::get('/', function(){
    return view('welcome');
});

Route::post('/paynow' , 'PaynowController@initialise')->name('initialise');
Route::get('/poll' , 'PaynowController@poll')->name('poll');


Auth::routes();

Route::group(['middleware' => 'auth'] , function () {
    Route::group(['middleware' =>  'user'] , function () {
        Route::get('member_dashboard' , 'MembersController@index')->name('member-dashboard');
        Route::get('member_profile', 'MembersController@profile');
        Route::get('membership', 'MembersController@membership');
        Route::post('/editmember' , 'MembersController@editmember')->name('edit-member');
    });
});

Route::group(['middleware' => 'auth'] , function () {
    Route::group(['middleware' =>  'admin'] , function () {
     Route::get('/admin' , 'AdminController@index')->name('admin');
    });
});


Route::post('member_verify', 'ClientController@member')->name('email-verification');
Route::get('admin_dashboard', 'ClientController@admin');
Route::get('member_verified_graduate', 'ClientController@graduate');
Route::get('member_verified', 'ClientController@student')->name('student-registration');
Route::get('member_verified_professional', 'ClientController@professional');
Route::get('verification' , 'ClientController@verify')->name('custom-verify');



