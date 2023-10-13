<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dokterController;
use App\Http\Controllers\perawatController;
use App\Http\Controllers\ruanganController;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\rawatinapController;
use App\Http\Controllers\obatController;

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

Route::get('/dokter', [dokterController::class,'index']);
Route::match(['get', 'post'],'/add-dokter',[dokterController::class,'store'])->name('doctor.add');

Route::get('/perawat', [perawatController::class,'index']);
Route::match(['get', 'post'],'/add-perawat',[perawatController::class,'store'])->name('perawat.add');

Route::get('/ruangan', [ruanganController::class,'index']);
Route::match(['get', 'post'],'/add-ruangan',[ruanganController::class,'store'])->name('ruangan.add');

Route::get('/pasien', [pasienController::class,'index']);
Route::match(['get', 'post'],'/add-pasien',[pasienController::class,'store'])->name('pasien.add');

Route::get('/rawat_inap', [rawatinapController::class,'index']);
Route::match(['get', 'post'],'/add-ri',[rawatinapController::class,'store'])->name('rawatinap.add');

Route::get('/obat', [obatController::class,'index']);
Route::match(['get', 'post'],'/add-obat',[obatController::class,'store'])->name('obat.add');

Route::get('/transaksi', [transaksiController::class,'index']);
Route::match(['get', 'post'],'/add-transaksi',[transaksiController::class,'store'])->name('transaksi.add');

Route::get('/', [dashboardController::class,'index']);