<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home_dua',function(){
    return view('home_backup');
});

Route::get('/beranda',function(){
    return view('beranda');
});

Route::get('/coba_css',function(){
    return view('coba_css');
});

// Route::get('/admin_home',function(){
//     return view('admin.home');
// });

Route::get('/',[\App\Http\Controllers\LandingController::class,'LandingHome'])->name('LandingHome');
Route::get('/home',[\App\Http\Controllers\LandingController::class,'Landing'])->name('Landing');
Route::get('/admin/home',[\App\Http\Controllers\LandingController::class,'adminHome'])->name('adminHome');

Route::get('/order/{id}',[\App\Http\Controllers\LandingController::class,'Order'])->name('Order');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/admin/kategori',\App\Http\Controllers\KategoriController::class);

