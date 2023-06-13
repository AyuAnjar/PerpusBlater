<?php

use App\Http\Controllers\KepalabukuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('home');
});

//Route untuk setelah login
Route::get('/homea', function(){
    return view('aPerpus.homeA');
});

//Route untuk Kepala setelah login
Route::get('/kepala', function(){
    return view('kepala.dashboard');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

//Route::get('/anggota', [AnggotaController::class,'index']);
Route::resource('/anggota', \App\Http\Controllers\AnggotaController::class);
Route::resource('/buku', \App\Http\Controllers\BukuController::class);
Route::resource('/peminjaman', \App\Http\Controllers\PeminjamanController::class);
Route::resource('/pengembalian', \App\Http\Controllers\PengembalianController::class);
Route::resource('/koleksi', \App\Http\Controllers\KoleksiController::class);

// Route Kepala Buku
Route::get('/kepalabuku', 'App\http\Controllers\KepalabukuController@index');
Route::get('/cetak-buku', 'App\http\Controllers\KepalabukuController@cetakBuku');

//Route Kepala Anggota
Route::get('/kepalaanggota', 'App\http\Controllers\KepalaanggotaController@index');
Route::get('/cetak-anggota', 'App\http\Controllers\KepalaanggotaController@cetakAnggota');

//Route Kepala Peminjaman
Route::get('/kepalapeminjaman', 'App\http\Controllers\kepalapeminjamanController@index');
Route::get('/cetak-peminjaman', 'App\http\Controllers\kepalapeminjamanController@cetakPeminjaman');

//Route Kepala Pengembalian
Route::get('/kepalapengembalian', 'App\http\Controllers\KepalapengembalianController@index');
Route::get('/cetak-pengembalian', 'App\http\Controllers\KepalapengembalianController@cetakPengembalian');
