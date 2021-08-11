<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AhrisAdminController;
use App\Http\Controllers\AhrisAccessController;
use App\Http\Controllers\dsbAdminController;
use App\Http\Controllers\dsbCreatorController;
use App\Http\Controllers\dsbReportController;

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
    return view('home');
});

/* old route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

//auth route for superadmin 
Route::group(['middleware' => ['auth', 'role:superadministrator']], function() { 
    //Route::get('users', 'App\Http\Controllers\DashboardController@activeusers')->name('superadmin.users');
    Route::get('spadmin/users', 'App\Http\Controllers\DashboardController@activeusers')->name('superadmin.users');
    Route::get('spadmin/reports', 'App\Http\Controllers\DashboardController@spadminreports')->name('superadmin.reports');
    Route::get('spadmin/freedomwall', 'App\Http\Controllers\DashboardController@spwall')->name('superadmin.wall');
    Route::get('spadmin/adduser', 'App\Http\Controllers\DashboardController@adduser')->name('superadmin.adduser');
    Route::get('spadmin/accessrequest', 'App\Http\Controllers\DashboardController@accessrequest')->name('superadmin.accessrequest');
    Route::get('spadmin/profile', 'App\Http\Controllers\DashboardController@spadminprofile')->name('superadmin.profile');
    Route::get('spadmin/settings', 'App\Http\Controllers\DashboardController@spadminsetings')->name('superadmin.settings');
    Route::get('spadmin/ahris', 'App\Http\Controllers\DashboardController@ahris')->name('superadmin.ahris');
});



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////// ------- AHRIS ------- ////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//auth route for ahris admin
Route::group(['middleware' => ['auth', 'role:admin-ahris']], function() {
    Route::get('ahris/admin/profile', [AhrisAdminController::class, 'profile'])->name('ahris/admin/profile');
    Route::get('ahris/admin/settings', [AhrisAdminController::class, 'settings'])->name('ahris/admin/settings');
    Route::get('ahris/admin/reports', [AhrisAdminController::class, 'reports'])->name('ahris/admin/reports');
    Route::get('ahris/admin/freedomwall', [AhrisAdminController::class, 'wall'])->name('ahris/admin/freedomwall');
    Route::get('ahris/admin/users', [AhrisAdminController::class, 'activeusers'])->name('ahris/admin/users');
    Route::get('ahris/admin/adduser', [AhrisAdminController::class, 'adduser'])->name('ahris/admin/adduser');
    Route::get('ahris/admin/accessrequest', [AhrisAdminController::class, 'accessrequest'])->name('ahris/admin/accessrequest');
    
});


//auth route for ahris access
Route::group(['middleware' => ['auth', 'role:admin-access']], function() {
    Route::get('ahris/accessmanager/profile', [AhrisAccessController::class,'profile'])->name('ahris/accessmanager/profile');
    Route::get('ahris/accessmanager/settings', [AhrisAccessController::class,'settings'])->name('ahris/accessmanager/settings');
    Route::get('ahris/accessmanager/reports', [AhrisAccessController::class,'reports'])->name('ahris/accessmanager/reports');
    Route::get('ahris/accessmanager/freedomwall', [AhrisAccessController::class,'wall'])->name('ahris/accessmanager/freedomwall');
    Route::get('ahris/accessmanager/users', [AhrisAccessController::class,'activeusers'])->name('ahris/accessmanager/users');
    Route::get('ahris/accessmanager/adduser', [AhrisAccessController::class,'adduser'])->name('ahris/accessmanager/adduser');
    Route::get('ahris/accessmanager/accessrequest', [AhrisAccessController::class,'accessrequest'])->name('ahris/accessmanager/accessrequest');
    Route::get('ahris/accessmanager/finddata', [AhrisAccessController::class,'finddata'])->name('ahris/accessmanager/finddata');;
    Route::get('ahris/accessmanager/join', [AhrisAccessController::class,'join'])->name('ahris/accessmanager/join');;

    
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////// ------- AHRIS  END ------- ///////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////DYNAMIC SURVEY BUILDER ////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//auth route for Dynamic Survey Builder admin
Route::group(['middleware' => ['auth', 'role:admin-survey']], function() {
    Route::get('dsb/admin/profile', [dsbAdminController::class,'profile'])->name('dsb/admin/profile');
    Route::get('dsb/admin/settings', [dsbAdminController::class,'settings'])->name('dsb/admin/settings');
    Route::get('dsb/admin/reports', [dsbAdminController::class,'reports'])->name('dsb/admin/reports');
    Route::get('dsb/admin/freedomwall', [dsbAdminController::class, 'wall'])->name('dsb/admin/freedomwall');
    Route::get('dsb/admin/users', [dsbAdminController::class, 'activeusers'])->name('dsb/admin/users');
    Route::get('dsb/admin/adduser', [dsbAdminController::class, 'adduser'])->name('dsb/admin/adduser');
    
});

//auth route for Dynamic Survey Builder creator
Route::group(['middleware' => ['auth', 'role:creator-survey']], function() {
    Route::get('dsb/creator/profile', [dsbCreatorController::class, 'profile'])->name('dsb/creator/profile');
    Route::get('dsb/creator/settings', [dsbCreatorController::class, 'settings'])->name('dsb/creator/settings');
    Route::get('dsb/creator/request', [dsbCreatorController::class, 'request'])->name('dsb/creator/request');
    Route::get('dsb/creator/builder', [dsbCreatorController::class, 'builder'])->name('dsb/creator/builder');
    Route::get('dsb/creator/surveylist', [dsbCreatorController::class, 'surveylist'])->name('dsb/creator/surveylist');
    
});

//auth route for Dynamic Survey Builder reports
Route::group(['middleware' => ['auth', 'role:report-survey']], function() {
    Route::get('dsb/reports/profile', [dsbReportController::class, 'profile'])->name('dsb/reports/profile');
    Route::get('dsb/reports/settings', [dsbReportController::class, 'settings'])->name('dsb/reports/settings');
    Route::get('dsb/reports/reports', [dsbReportController::class, 'reports'])->name('dsb/reports/reports');
    
});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////DYNAMIC SURVEY BUILDER END/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


require __DIR__.'/auth.php';