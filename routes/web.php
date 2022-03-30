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
Route::post('/order',[\App\Http\Controllers\LandingController::class,'tambahInvoice'])->name('tambahInvoice');


// Route::get('/invoice/{invoice_code}',[\App\Http\Controllers\LandingController::class,'Invoice'])->name('Invoice');
Route::get('/daftar_invoice',[\App\Http\Controllers\LandingController::class,'ListInvoice'])->name('ListInvoice');
// Route::get('/daftar_invoice/{invoice_code}',[\App\Http\Controllers\LandingController::class,'Invoice'])->name('Invoice');
Route::get('/daftar_invoice/{id}',[\App\Http\Controllers\LandingController::class,'Invoice'])->name('Invoice');

Route::get('/cari_invoice',[\App\Http\Controllers\LandingController::class,'pencarianinvoice'])->name('pencarianinvoice');

Route::get('/searchinvoice', [\App\Http\Controllers\LandingController::class,'searchinvoice'])->name('searchinvoice');

// Route::post('/searchinvoice/{id}', [\App\Http\Controllers\LandingController::class,'searchinvoice'])->name('searchinvoice');
Route::get('/coba_api',[\App\Http\Controllers\LandingController::class,'APIML'])->name('APIML');




Route::get('/daftar_member_baru',[\App\Http\Controllers\LandingController::class,'halaman_daftar_anggota_baru'])->name('halaman_daftar_anggota_baru');


Route::post('/daftar_member_baru',[\App\Http\Controllers\LandingController::class,'daftaranggotabaru'])->name('daftaranggotabaru');




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

// Halaman Admin
Route::get('/admin/home',[\App\Http\Controllers\LandingController::class,'adminHome'])->name('adminHome')->middleware('is_admin');
Route::resource('/admin/kategori',\App\Http\Controllers\KategoriController::class)->middleware('is_admin');
Route::resource('/admin/nominal',\App\Http\Controllers\NominalController::class)->middleware('is_admin');
Route::get('/admin/user',[\App\Http\Controllers\LandingController::class,'adminUser'])->name('adminUser')->middleware('is_admin');
Route::post('/admin/user/{id}',[\App\Http\Controllers\LandingController::class,'SendWhatsApp'])->name('SendWhatsApp')->middleware('is_admin');

Route::resource('/invoice',\App\Http\Controllers\OrderController::class)->middleware('is_admin');




// Halaman Member
Route::get('/member/home',[\App\Http\Controllers\LandingController::class,'MemberHome'])->name('MemberHome')->middleware('is_member');
Route::get('/member/profile',[\App\Http\Controllers\LandingController::class,'MemberProfile'])->name('MemberProfile')->middleware('is_member');

Route::delete('/member/profile/{id}',[\App\Http\Controllers\LandingController::class,'deleteinvoiceMember'])->name('deleteinvoiceMember')->middleware('is_member');

// Route::get('/member/join_reseller',[\App\Http\Controllers\LandingController::class,'JoinReseller'])->name('JoinReseller');

// Route::post('/member/join_reseller',[\App\Http\Controllers\LandingController::class,'addOrderReseller'])->name('addOrderReseller');



Route::get('/member/upgrade_role',[\App\Http\Controllers\LandingController::class,'JoinReseller'])->name('JoinReseller');

Route::post('/member/upgrade_role',[\App\Http\Controllers\LandingController::class,'addOrderReseller'])->name('addOrderReseller');




Route::get('/member/invoice/{id}',[\App\Http\Controllers\LandingController::class,'InvoiceReseller'])->name('InvoiceReseller');

