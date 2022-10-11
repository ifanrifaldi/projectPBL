<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidasiController;
use Illuminate\Support\Facades\Route;

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
    return view('');
});

Route::resource('pembelian', PembelianController::class);

Route::get('beranda', [AdminController::class, 'showBeranda']);
Route::resource('validasi', ValidasiController::class);
Route::resource('divisi', DivisiController::class);
Route::resource('user', UserController::class);


Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'Loginprocess']);
Route::get('logout', [AuthController::class, 'Logout']);