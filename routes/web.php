<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('index');})->name('index');

Auth::routes();

// admin menu routing
Route::get('/admin',[HomeController::class, 'admin'])->name('admin')->middleware('is_admin');

// Hotel Routes
// user
Route::get('/hotel',[HotelController::class, 'index']);
// admin
Route::get('/hotel/admin',[HotelController::class, 'admin'])->middleware('is_admin');
