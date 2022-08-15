<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelUserController;
use App\Http\Controllers\MobilUserController;
use App\Http\Controllers\WisataUserController;
use App\Http\Controllers\KategoriUserController;
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

Route::get('/hallo', function(){
    return view('hallo');
});

Route::get('/test-admin', function(){
    return view('layouts.admin');
});

// Route Project
Route::get('/user',[ArtikelUserController::class,'artikel3']);

Route::get('/blog',[ArtikelUserController::class,'artikel']);

Route::get('/blog_detail',[ArtikelUserController::class,'artikel2']);

Route::get('/paket_wisata',[WisataUserController::class,'wisata']);

Route::get('/wisata_detail',[WisataUserController::class,'wisata2']);

Route::get('/rental_mobil',[MobilUserController::class,'mobil']);

Route::get('/mobil_detail',[MobilUserController::class,'mobil2']);

Route::get('/wisata_alam',[KategoriUserController::class,'alam']);

Route::get('/wisata_budaya',[KategoriUserController::class,'budaya']);

Route::get('/wisata_religi',[KategoriUserController::class,'religi']);

Route::get('/category', function(){
        return view('frontend.category');
    });

// end Route Project

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('artikel', ArtikelController::class);
Route::resource('artikeluser', ArtikelUserController::class);
Route::resource('kategoriuser', KategoriUserController::class);
Route::resource('wisatauser', WisataUserController::class);
Route::resource('mobiluser', MobilUserController::class);
Route::resource('wisata', WisataController::class);
Route::resource('mobil', MobilController::class);
Route::resource('kategori', KategoriController::class);