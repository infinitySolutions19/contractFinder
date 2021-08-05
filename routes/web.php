<?php

use Illuminate\Support\Facades\Route;

//Hasnain's Code Start's
use App\Http\Controllers\frontendControllers\home\HomeController;
use App\Http\Controllers\frontendControllers\livesearch\LiveSearchController;
use App\Http\Controllers\frontendControllers\tenderdetailpage\TenderDetailController;
//Hasnain's Code Ends's



//Faisal's Code Start's
use App\Http\Controllers\admin\DashboardController;
//Faisal's Code Ends's

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
});


//Hasnain's Code Start's

Route::get('myhome',[HomeController::class,'index'])->name('myhome');
Route::get('livesearch',[LiveSearchController::class,'index'])->name('livesearch');
Route::get('historicalsearch',[LiveSearchController::class,'historicalSearch'])->name('historicalsearch');
Route::get('tenderdetail',[TenderDetailController::class,'index'])->name('tenderdetail');
//Hasnain's Code Ends's


Auth::routes();


//Faisal's Code Start's

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// admin Route Start Here

Route::prefix('admin')->group(function ()
{
Route::middleware('auth:admin')->group(function ()
{
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'admin_dashboard']);
// Logout

Route::get('/logout', [DashboardController::class, 'logout'])->name('admin-logout');


});
 


Route::get('login', [DashboardController::class, 'index'])->name('admin.login');
Route::post('/login', [DashboardController::class, 'store'])->name('admin-loginAttempt');
Route::post('/sendpassword', [DashboardController::class, 'sendpassword'])->name('sendpassword');


});

// admin Route End Here

     




 
//Faisal's Code Ends's