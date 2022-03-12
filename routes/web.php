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

Route::get('/order/{id}',[\App\Http\Controllers\LandingController::class,'Order'])->name('Order');

// Route::get('/invoice/{invoice_code}',[\App\Http\Controllers\LandingController::class,'Invoice'])->name('Invoice');
Route::get('/daftar_invoice',[\App\Http\Controllers\LandingController::class,'ListInvoice'])->name('ListInvoice');
// Route::get('/daftar_invoice/{invoice_code}',[\App\Http\Controllers\LandingController::class,'Invoice'])->name('Invoice');
Route::get('/daftar_invoice/{id}',[\App\Http\Controllers\LandingController::class,'Invoice'])->name('Invoice');

Route::get('/cari_invoice',[\App\Http\Controllers\LandingController::class,'pencarianinvoice'])->name('pencarianinvoice');

Route::get('/searchinvoice', [\App\Http\Controllers\LandingController::class,'searchinvoice'])->name('searchinvoice');

// Route::post('/searchinvoice/{id}', [\App\Http\Controllers\LandingController::class,'searchinvoice'])->name('searchinvoice');
Route::get('/coba_api',[\App\Http\Controllers\LandingController::class,'APIML'])->name('APIML');



// Route::post('/invoice',[\App\Http\Controllers\LandingController::class,'PostOrder'])->name('PostOrder');



// Routing Invoice 
// Route::resource('/invoice',\App\Http\Controllers\OrderController::class);






// Halaman Admin 


Route::get('/admin/invoice',[\App\Http\Controllers\LandingController::class,'semuainvoice'])->name('semuainvoice');
Route::delete('/admin/invoice/{id}',[\App\Http\Controllers\LandingController::class,'hapusinvoice'])->name('hapusinvoice');
Route::patch('/admin/invoice/{id}',[\App\Http\Controllers\LandingController::class,'updatekonfirmasiinvoice'])->name('updatekonfirmasiinvoice');

Route::patch('/admin/invoice/{id}/gagal',[\App\Http\Controllers\LandingController::class,'updateGagalinvoice'])->name('updateGagalinvoice');





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Auth::routes(['verify' => true]);
Route::get('/admin/home',[\App\Http\Controllers\LandingController::class,'adminHome'])->name('adminHome')->middleware('is_admin');
Route::resource('/admin/kategori',\App\Http\Controllers\KategoriController::class)->middleware('is_admin');
Route::resource('/admin/nominal',\App\Http\Controllers\NominalController::class)->middleware('is_admin');

Route::resource('/invoice',\App\Http\Controllers\OrderController::class)->middleware('is_admin');
