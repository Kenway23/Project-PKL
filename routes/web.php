<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\KategoriController;
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
Route::get('/user', function(){
        return view('frontend.beranda');
    });

Route::get('/blog', function(){
        return view('frontend.blog');
    });
    
Route::get('/category', function(){
        return view('frontend.category');
    });

// end Route Project

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('artikel', ArtikelController::class);
Route::resource('wisata', WisataController::class);
Route::resource('mobil', MobilController::class);
Route::resource('kategori', KategoriController::class);