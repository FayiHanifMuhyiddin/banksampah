<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\kerajinanController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\mitraController;
use App\Http\Controllers\profilController;

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

// L A S T   P R O J E C T ===============================================================================================
Route::get('home', [MainController::class, 'beranda']);
Route::get('/kerajinan', [MainController::class, 'kerajinan']);
Route::get('/banksampah', [MainController::class, 'banksampah'])->name('Register');
Route::get('/tentangkami', [MainController::class, 'tentang']);
Route::get('/keranjang', [keranjangController::class, 'keranjang'])->name('keranjang');
Route::get('/bayar', [keranjangController::class, 'bayar'])->name('bayar');
Route::get('/pesanan-saya', [keranjangController::class, 'pesanan'])->name('pesanan');
Route::get('/userr', [MainController::class, 'user'])
    ->name('user');

Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [MainController::class, 'beranda'])->name('home');
    Route::get('/kerajinan', [MainController::class, 'kerajinan']);
    Route::get('/user', [MainController::class, 'profil']);
    Route::get('/banksampah', [MainController::class, 'banksampah']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});
Route::get('/forget-password', 'ForgotPasswordController@getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');
Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');

// Route Kerajinan
Route::get('/kerajinan', [kerajinanController::class, 'index'])
    ->name('kerajinan.index');
Route::get('/kerajinan-a', [kerajinanController::class, 'index2'])
    ->name('kerajinan.index2');
Route::get('/kerajinan/create',[kerajinanController::class,'create'])
    ->name('kerajinan.create');
Route::post('/kerajinan',[kerajinanController::class,'store'])
    ->name('kerajinan.store');
Route::get('/kerajinan/{kerajinan}',[kerajinanController::class,'show'])
    ->name('kerajinan.show');
Route::get('/kerajinan-a/{kerajinan}',[kerajinanController::class,'show2'])
->name('kerajinan.show2');
Route::get('/kerajinan/{kerajinan}/edit',[kerajinanController::class,'edit'])
    ->name('kerajinan.edit');
Route::patch('/kerajinan/{kerajinan}',[kerajinanController::class,'update'])
    ->name('kerajinan.update');
Route::delete('/kerajinan/{kerajinan}',[kerajinanController::class,'destroy'])
    ->name('kerajinan.destroy');
Route::patch('/kerajinan/{kerajinan}', [kerajinanController::class, 'update'])->name('kerajinan.update');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/search', [KerajinanController::class, 'search']);
Route::get('/kerajinan-cari/tas', [kerajinanController::class, 'tas']);
Route::get('/kerajinan-cari/vas', [kerajinanController::class, 'vas']);
Route::get('/kerajinan-cari/pigura', [kerajinanController::class, 'pigura']);
Route::get('/kerajinan-cari/plastik', [kerajinanController::class, 'plastik']);
Route::get('/kerajinan-cari/kertas', [kerajinanController::class, 'kertas']);
Route::get('/kerajinan-cari/lainnya', [kerajinanController::class, 'lainnya1']);
Route::get('/kerajinan-cari/lainnyaa', [kerajinanController::class, 'lainnya2']);
Route::get('/keranjang', [keranjangController::class, 'keranjang']);
Route::get('/bayar', [keranjangController::class, 'bayar']);

// Route Mitra
Route::get('/mitra', [mitraController::class, 'index'])
    ->name('mitra.index');
Route::get('/mitra/create',[mitraController::class,'create'])
    ->name('mitra.create');
Route::post('/mitra',[mitraController::class,'store'])
    ->name('mitra.store');
Route::get('/mitra/{mitra}/edit',[mitraController::class,'edit'])
    ->name('mitra.edit');
Route::patch('/mitra/{mitra}',[mitraController::class,'update'])
    ->name('mitra.update');
Route::delete('/mitra/{mitra}',[mitraController::class,'destroy'])
    ->name('mitra.destroy');


// ROUTE ADMIN
Route::get('/admin', [MainController::class, 'admin']);
Route::get('/pesanan', [keranjangController::class, 'pemesanan'])->name('pesanan');