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
Route::get('/hotel/map',[HotelController::class, 'map']);
// admin
Route::get('/hotel/admin',[HotelController::class, 'admin'])->middleware('is_admin');
Route::get('/hotel/create',[HotelController::class, 'create'])->middleware('is_admin');
Route::post('/hotel/admin',[HotelController::class,'store'])->name('/hotel/store')->middleware('is_admin');
Route::get('/hotel/show/{id}',[HotelController::class, 'show'])->name('/hotel/show')->middleware('is_admin');
Route::delete('/hotel/destroy/{id}',[HotelController::class, 'destroy'])->name('hotel/destroy')->middleware('is_admin');