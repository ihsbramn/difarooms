<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserController;
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

// user

//hotel 
Route::get('/hotel',[HotelController::class, 'index']);
Route::get('/hotel/map',[HotelController::class, 'map']);
//hotel
//forum
Route::get('/forum',[ForumController::class, 'index']);
Route::get('/forum/create',[ForumController::class, 'create']);
Route::post('/forum',[ForumController::class,'store'])->name('/forum/store');
Route::get('/forum/show/{id}',[ForumController::class, 'show'])->name('/forum/show');
Route::get('/user/myforum',[UserController::class, 'myforum']);
Route::delete('/forum/destroy/{id}',[ForumController::class, 'destroy'])->name('forum/destroy');
Route::get('/forum/edit/{id}',[ForumController::class, 'edit'])->name('forum/edit');
Route::match(['put','patch'],'/forum/update/{id}',[ForumController::class,'update'])->name('forum/update');
//forum

// admin middleware

//hotel
Route::get('/hotel/admin',[HotelController::class, 'admin'])->middleware('is_admin');
Route::get('/hotel/create',[HotelController::class, 'create'])->middleware('is_admin');
Route::post('/hotel/admin',[HotelController::class,'store'])->name('/hotel/store')->middleware('is_admin');
Route::get('/hotel/show/{id}',[HotelController::class, 'show'])->name('/hotel/show')->middleware('is_admin');
Route::delete('/hotel/destroy/{id}',[HotelController::class, 'destroy'])->name('hotel/destroy')->middleware('is_admin');
Route::get('/hotel/edit/{id}',[HotelController::class, 'edit'])->name('hotel/edit')->middleware('is_admin');
Route::match(['put','patch'],'/hotel/update/{id}',[HotelController::class,'update'])->name('hotel/update')->middleware('is_admin');
//hotel