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

Route::get('/..', 'MembersController@index');

Route::post('/paynow' , 'PaynowController@initialise')->name('initialise');
Route::get('/poll' , 'PaynowController@poll')->name('poll');
// Route::get('students/{student}', function(App\StudentMember $student)
// {
//      return $student->name;
// });
//route model binding


Auth::routes();


Route::resource('members', 'MembersController');
Route::get('member_dashboard' , 'ClientController@index')->name('member-dashboard');
Route::post('member_verify', 'ClientController@member')->name('email-verification');
Route::get('member_profile', 'ClientController@profile');
Route::get('admin_dashboard', 'ClientController@admin');
Route::get('registration/graduate', 'ClientController@graduate')->name('graduate-registration');
Route::get('registration/student', 'ClientController@student')->name('student-registration');
Route::get('registration/professional', 'ClientController@professional')->name('professional-registration');
Route::get('registration/associate', 'ClientController@associate')->name('associate-registration');
Route::get('registration/affiliate', 'ClientController@affiliate')->name('affiliate-registration');
Route::get('registration/institutional', 'ClientController@institutional')->name('institutional-registration');
Route::get('membership', 'ClientController@membership');
Route::get('membership-selection', 'ClientController@membershipSelection')->name('membership-selection');
Route::get('verification' , 'ClientController@verify')->name('custom-verify');
Route::post('/editmember' , 'ClientController@editmember')->name('edit-member');


Route::get('/reports', 'MembersController@reportsIndex')->name('reports');
Route::post('/reports', 'MembersController@viewReport')->name('view reports');

Route::get('/add', function(){
    return view('admin.memberForm');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
