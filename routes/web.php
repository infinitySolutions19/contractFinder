<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendControllers\home\HomeController;
use App\Http\Controllers\admin\DashboardController;

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

Route::get('myhome',[HomeController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin');
     
Route::get('/admin/login', [DashboardController::class, 'login'])->name('admin.login');
 

