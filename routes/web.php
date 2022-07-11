<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\destinasicontroller;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\HotelImageController;
use App\Http\Controllers\HotelFascilityController;
use App\Http\Controllers\HotelRoomtypeController;
use App\Models\HotelRoomtype;
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

// USER ----------------------------------------------------------------------------------------------------------------------------------------------------

//hotel 
Route::get('/hotel',[HotelController::class, 'index'])->name('/hotel');
Route::get('/hotel/map',[HotelController::class, 'map']);
Route::get('/hotel/show/{id}',[HotelController::class, 'show'])->name('/hotel/show')->middleware('cors');
//hotel

//destinasi
Route::get('/destinasi',[destinasicontroller::class, 'destinasi'])->name('/destinasi');
Route::get('/destinasi/bandung',[destinasicontroller::class, 'bandung'])->name('/destinasi/bandung');
Route::get('/destinasi/bandung/asia-afrika',[destinasicontroller::class, 'asaf'])->name('/destinasi/bandung/asia-afrika');
//destinasi

//forum
Route::get('/forum',[ForumController::class, 'index'])->name('/forum')->middleware('auth');
Route::get('/forum/create',[ForumController::class, 'create'])->name('/forum/create');
Route::post('/forum/store',[ForumController::class,'store'])->name('/forum/store');
Route::get('/forum/show/{id}',[ForumController::class, 'show'])->name('/forum/show');
Route::get('/user/myforum',[UserController::class, 'myforum']);
Route::get('/user/myfavourites',[UserController::class, 'myfavourites']);
Route::delete('/forum/destroy/{id}',[ForumController::class, 'destroy'])->name('forum/destroy');
Route::get('/forum/edit/{id}',[ForumController::class, 'edit'])->name('forum/edit');
Route::match(['put','patch'],'/forum/update/{id}',[ForumController::class,'update'])->name('forum/update');
//forum

// forum img
Route::post('forum_img/store', [ForumImageController::class, 'store' ])->name('forum_img/store');
Route::delete('forum_img/destroy/{id}',[ForumImageController::class, 'destroy'])->name('forum_img/destroy');
// forum img

// comment
Route::post('/comment/store',[CommentController::class,'store'])->name('/comment/store');
// comment

// Favourites
Route::post('/favourites/store',[FavouritesController::class,'store'])->name('/favourites/store');
// Favourites

// About US
Route::get('/aboutus',[UserController::class,'aboutus'])->name('/aboutus');
// About US

// ADMIN ----------------------------------------------------------------------------------------------------------------------------------------------------

//hotel
Route::get('/hotel/admin',[HotelController::class, 'admin'])->name('hotel/admin')->middleware('is_admin');
Route::get('/hotel/create',[HotelController::class, 'create'])->middleware('is_admin');
Route::post('/hotel/admin',[HotelController::class,'store'])->name('/hotel/store')->middleware('is_admin');
Route::delete('/hotel/destroy/{id}',[HotelController::class, 'destroy'])->name('hotel/destroy')->middleware('is_admin');
Route::get('/hotel/edit/{id}',[HotelController::class, 'edit'])->name('hotel/edit')->middleware('is_admin');
Route::match(['put','patch'],'/hotel/update/{id}',[HotelController::class,'update'])->name('hotel/update')->middleware('is_admin');
//hotel

// hotel img
Route::post( 'hotel_img/store',[ HotelImageController::class, 'store' ])->name('hotel_img/store')->middleware('is_admin');
Route::delete('hotel_img/destroy/{id}',[HotelImageController::class, 'destroy'])->name('hotel_img/destroy')->middleware('is_admin');
// hotel img

// hotel fascilities
Route::post( 'hotel_fascility/store',[HotelFascilityController::class, 'store' ])->name('hotel_fascility/store')->middleware('is_admin');
Route::delete('hotel_fascility/destroy/{id}',[HotelFascilityController::class, 'destroy'])->name('hotel_fascility/destroy')->middleware('is_admin');
// hotel fascilities

// hotel Roomtype
Route::post( 'hotel_roomtype/store',[HotelRoomtypeController::class, 'store' ])->name('hotel_roomtype/store')->middleware('is_admin');
Route::delete('hotel_roomtype/destroy/{id}',[HotelRoomtypeController::class, 'destroy'])->name('hotel_roomtype/destroy')->middleware('is_admin');
// hotel Roomtype


//forum
Route::get('/forum/admin',[ForumController::class, 'admin'])->name('forum/admin')->middleware('is_admin');
Route::delete('/forum/destroy/{id}',[ForumController::class, 'destroy_admin'])->name('forum/destroy');

