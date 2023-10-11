<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dokterController;
use App\Http\Controllers\perawatController;
use App\Http\Controllers\ruanganController;
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

Route::get('/', [dashboardController::class,'index']);