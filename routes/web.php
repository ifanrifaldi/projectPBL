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
Route::prefix('divisi')->middleware('auth')->group(function(){
Route::resource('pembelian', PembelianController::class);
});
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('validasi', ValidasiController::class);
    

    Route::resource('divisi', DivisiController::class);
});

Route::get('beranda', [AdminController::class, 'showBeranda']);


Route::resource('user', UserController::class);

// login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'Logout']);

