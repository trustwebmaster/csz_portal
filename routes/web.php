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

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Voyager as VoyagerVoyager;

Route::get('/', function(){
    return view('welcome');
});

Route::post('/paynow' , 'PaynowController@initialise')->name('initialise');
Route::get('/poll' , 'PaynowController@poll')->name('poll');
Route::post('/member-renewal' , 'MembersController@payment')->name('member-renewal');
Route::get('/member-payment' , 'MembersController@member_payment')->name('member-payment');



Auth::routes();

Route::group(['middleware' => 'auth'] , function () {
    Route::group(['middleware' =>  'user'] , function () {
        Route::get('member_dashboard' , 'MembersController@index')->name('member-dashboard');
        Route::get('member_profile', 'MembersController@profile');
        Route::get('membership', 'MembersController@membership');
        Route::post('/editmember' , 'MembersController@editmember')->name('edit-member');
        Route::get('/user/membership-renewal' , 'MembersController@membershipRenewal')->name('user.membership-renewal');
        Route::get('/user/cpd-events' , 'MembersController@cpdEvents')->name('user.cpd-events');
        Route::get('/user/cpd-points' , 'MembersController@cpdPoints')->name('user.cpd-points');
        Route::get('/user/profile' , 'MembersController@userProfile')->name('user.profile');
        Route::post('/member-uploads' , 'MembersController@member_uploads')->name('upload.member.files');
        Route::get('/member-upload-download/{document}' , 'MembersController@member_download')->name('download.member.files');
    });
});

Route::group(['middleware' => 'auth'] , function () {
    Route::group(['middleware' =>  'admin'] , function () {
     Route::get('/admin' , 'AdminController@index')->name('admin');
     Route::get('/admin/pending-approvals' , 'AdminController@pendingApprovals')->name('admin.pending-approvals');
     Route::get('/admin/pending-approvals/show/{user}' , 'AdminController@pendingApprovalsShow')->name('admin.pending-approvals.show');
     Route::get('/admin/member/school-id/{member}' , 'AdminController@schoolID')->name('member-school');
     Route::get('/admin/membe/national-id/{member}' , 'AdminController@nationalID')->name('member-national');
     Route::get('/approve-member/{member}' , 'AdminController@approve_member')->name('accept-member');
     Route::get('/decline-member/{member}' , 'AdminController@decline_member')->name('decline-member');
     Route::post('/member-approval/{member}' , 'AdminController@approval')->name('member-approval');
     Route::post('/admin/reports/show' , 'AdminController@reportShow')->name('admin.report.show');
     Route::get('/admin/students' , 'AdminController@students')->name('students');
     Route::get('/admin/professional' , 'AdminController@professional')->name('professional');
     Route::get('/admin/companies' , 'AdminController@company')->name('company');
    Route::get('/admin/cpd-points' , 'AdminController@cpdPoints')->name('admin.cpd-points');
    Route::get('/admin/cpd-points/show' , 'AdminController@cpdPointsShow')->name('admin.cpd-points.show');
    Route::get('/admin/payments' , 'AdminController@memberPayments')->name('member-payments');


    });
});


Route::post('member_verify', 'ClientController@member')->name('email-verification');
Route::get('admin_dashboard', 'ClientController@admin');
Route::get('member_verified_graduate', 'ClientController@graduate');
Route::get('member_verified', 'ClientController@student')->name('student-registration');
Route::get('member_verified_professional', 'ClientController@professional');
Route::get('verification' , 'ClientController@verify')->name('custom-verify');



