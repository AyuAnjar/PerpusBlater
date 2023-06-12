<?php

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


// Route::get('/', function () {
//     return view('Layouts.main');
// });

Route::get('/dashboard', function(){
    return view('dashboard');
});

//Route::get('/anggota', [AnggotaController::class,'index']);
Route::resource('/anggota', \App\Http\Controllers\AnggotaController::class);
Route::resource('/buku', \App\Http\Controllers\BukuController::class);
Route::resource('/peminjaman', \App\Http\Controllers\PeminjamanController::class);
Route::resource('/pengembalian', \App\Http\Controllers\PengembalianController::class);

// Route Welcome
