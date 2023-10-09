<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dokterController;
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

Route::get('/', [dashboardController::class,'index']);