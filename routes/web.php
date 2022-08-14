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
Route::get('/destinasi/aceh',[destinasicontroller::class, 'aceh'])->name('/destinasi/aceh');
Route::get('/destinasi/bali',[destinasicontroller::class, 'bali'])->name('/destinasi/bali');
Route::get('/destinasi/batam',[destinasicontroller::class, 'batam'])->name('/destinasi/batam');
Route::get('/destinasi/bogor',[destinasicontroller::class, 'bogor'])->name('/destinasi/bogor');
Route::get('/destinasi/jakarta',[destinasicontroller::class, 'jakarta'])->name('/destinasi/jakarta');
Route::get('/destinasi/kudus',[destinasicontroller::class, 'kudus'])->name('/destinasi/kudus');
Route::get('/destinasi/lombok',[destinasicontroller::class, 'lombok'])->name('/destinasi/lombok');
Route::get('/destinasi/makassar',[destinasicontroller::class, 'makassar'])->name('/destinasi/makassar');
Route::get('/destinasi/malang',[destinasicontroller::class, 'malang'])->name('/destinasi/malang');
Route::get('/destinasi/manado',[destinasicontroller::class, 'manado'])->name('/destinasi/manado');
Route::get('/destinasi/padang',[destinasicontroller::class, 'padang'])->name('/destinasi/padang');
Route::get('/destinasi/palembang',[destinasicontroller::class, 'palembang'])->name('/destinasi/palembang');
Route::get('/destinasi/rajaampat',[destinasicontroller::class, 'rajaampat'])->name('/destinasi/rajaampat');
Route::get('/destinasi/semarang',[destinasicontroller::class, 'semarang'])->name('/destinasi/semarang');
Route::get('/destinasi/solo',[destinasicontroller::class, 'solo'])->name('/destinasi/solo');
Route::get('/destinasi/surabaya',[destinasicontroller::class, 'surabaya'])->name('/destinasi/surabaya');
Route::get('/destinasi/yogya',[destinasicontroller::class, 'yogya'])->name('/destinasi/yogya');
Route::get('/destinasi/bedugul',[destinasicontroller::class, 'bedugul'])->name('/destinasi/bedugul');
Route::get('/destinasi/bandung/rancaupas',[destinasicontroller::class, 'rancaupas'])->name('/destinasi//bandung/rancaupas');
Route::get('/destinasi/bandung/floatingmarket',[destinasicontroller::class, 'floatingmarket'])->name('/destinasi/bandung/floatingmarket');
Route::get('/destinasi/bandung/gedungsate',[destinasicontroller::class, 'gedungsate'])->name('/destinasi/bandung/gedungsate');
Route::get('/destinasi/bandung/farmhouse',[destinasicontroller::class, 'farmhouse'])->name('/destinasi/bandung/farmhouse');
Route::get('/destinasi/bandung/tangkubanprahu',[destinasicontroller::class, 'tangkubanprahu'])->name('/destinasi/bandung/tangkubanprahu');
Route::get('/destinasi/bandung/cartil',[destinasicontroller::class, 'cartil'])->name('/destinasi/bandung/cartil');
Route::get('/destinasi/bandung/braga',[destinasicontroller::class, 'braga'])->name('/destinasi/bandung/braga');
Route::get('/destinasi/borobudur',[destinasicontroller::class, 'borobudur'])->name('/destinasi/borobudur');
Route::get('/destinasi/pulaukomodo',[destinasicontroller::class, 'pulaukomodo'])->name('/destinasi/pulaukomodo');
Route::get('/destinasi/bunaken',[destinasicontroller::class, 'bunaken'])->name('/destinasi/bunaken');
Route::get('/destinasi/gilitrawangan',[destinasicontroller::class, 'gilitrawangan'])->name('/destinasi/gilitrawangan');
Route::get('/destinasi/bandung/kiara-arta-park',[destinasicontroller::class, 'kap'])->name('/destinasi/bandung/kiara-arta-park');
Route::get('/destinasi/bandung/bandung-zoo',[destinasicontroller::class, 'zoo'])->name('/destinasi/bandung/bandung-zoo');
Route::get('/destinasi/bandung/museum-geologi',[destinasicontroller::class, 'museumgeo'])->name('/destinasi/bandung/museum-geologi');
Route::get('/destinasi/bandung/taman-lalu-lintas',[destinasicontroller::class, 'tamanlalin'])->name('/destinasi/bandung/taman-lalu-lintas');
Route::get('/destinasi/bandung/trans-studio-mall',[destinasicontroller::class, 'tsm'])->name('/destinasi/bandung/trans-studio-mall');
Route::get('/destinasi/bandung/museum-sri-baduga',[destinasicontroller::class, 'msb'])->name('/destinasi/bandung/museum-sri-baduga');
Route::get('/destinasi/bandung/braga-city-walk',[destinasicontroller::class, 'bcw'])->name('/destinasi/bandung/braga-city-walk');
//destinasi

//forum
Route::get('/forum',[ForumController::class, 'index'])->name('/forum');
Route::get('/forum/create',[ForumController::class, 'create'])->name('/forum/create');
Route::post('/forum/store',[ForumController::class,'store'])->name('/forum/store');
Route::get('/forum/show/{id}',[ForumController::class, 'show'])->name('/forum/show');
Route::get('/user/myforum',[UserController::class, 'myforum']);
Route::get('/user/myfavourites',[UserController::class, 'myfavourites']);
Route::delete('/forum/destroy/{id}',[ForumController::class, 'destroy'])->name('forum/destroy');
Route::get('/forum/edit/{id}',[ForumController::class, 'edit'])->name('forum/edit');
Route::match(['put','patch'],'/forum/update/{id}',[ForumController::class,'update'])->name('forum/update');
Route::get('/forum/search',[ForumController::class, 'search'])->name('forum/search');
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
Route::delete('/favourites/destroy/{id}',[FavouritesController::class,'destroy'])->name('/favourites/destroy');
// Favourites

// main control
Route::get('/aboutus',[UserController::class,'aboutus'])->name('/aboutus');
Route::get('/bantuan',[UserController::class,'bantuan'])->name('/bantuan');
Route::get('/tujuan',[UserController::class,'tujuan'])->name('/tujuan');
Route::get('/kontak',[UserController::class,'kontak'])->name('/kontak');
// main control

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
Route::get('/forum/admin/show/{id}',[ForumController::class, 'adminshow'])->name('forum/admin/show')->middleware('is_admin');
Route::delete('/forum/destroy/{id}',[ForumController::class, 'destroy_admin'])->name('forum/destroy');

