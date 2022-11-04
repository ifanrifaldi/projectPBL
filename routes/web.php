<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\Pegawai\BasePegawaiController;
use App\Http\Controllers\Pegawai\PengajuanController;

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
Route::prefix('pegawai')->middleware('auth:pegawai')->group(function (){
    Route::resource('/', BasePegawaiController::class);

    Route::get('pengajuan', [PengajuanController::class, 'index']);
    Route::get('pengajuan/create', [PengajuanController::class, 'create']);
    Route::post('pengajuan', [PengajuanController::class, 'store']);
    Route::get('pengajuan/{pembelian}', [PengajuanController::class,'show']);
    Route::get('pengajuan/{pembelian}/edit', [PengajuanController::class,'edit']);
    Route::put('pengajuan/{pembelian}', [PengajuanController::class,'update']);
    Route::delete('pengajuan/{pembelian}', [PengajuanController::class, 'destroy']);
    // Route::resource('pengajuan', PengajuanController::class);
    // Route::get('pengajuan/edit', [PengajuanController::class, 'edit']);

});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('/', AdminController::class);
    Route::resource('validasi', ValidasiController::class);
    Route::resource('divisi', DivisiController::class);
    Route::get('validasi/{pembelian}', [ValidasiController::class, 'show']);
    Route::get('validasi/{pembelian}/edit', [ValidasiController::class, 'edit']);
    Route::resource('pegawai', PegawaiController::class);
});

Route::get('beranda', [AdminController::class, 'showBeranda']);


Route::resource('user', UserController::class);

// login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'Logout']);
Route::get('test', [AuthController::class, 'test']);

