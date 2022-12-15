<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PengajuanController;
use App\Http\Controllers\PengajuanDivisiController;
use App\Http\Controllers\Admin\DivisiController;
use App\Http\Controllers\AuthController;


Route::controller(CobaController::class)->group(function () {
    Route::get('/barang', 'tampil');
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});



// Route::get('/login', function () {
//     return view('template.login');
// });
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'showLogin')->name('login');
    Route::get('login', 'showLogin')->name('login');
    Route::post('login', 'loginProcess');
    Route::get('logout', 'logout');
});


Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::controller(PengajuanController::class)->group(function () {
        // Route::get('admin/pengajuan/test','test');
        Route::get('dashboard', 'dashboard');
        Route::get('pengajuan', 'tampil');
        Route::get('pengajuan/create', 'tambah');
        Route::post('pengajuan', 'store');
        Route::get('pengajuan/{id}', 'detail');
        Route::get('pengajuan/{id}/edit', 'ubah');
        Route::post('pengajuan/edit', 'perbarui');
        Route::get('pengajuan/hapus/{id}', 'hapus');
        // Route::get('/home/{id}','show');
        Route::put('pengajuan/tolak/{validasi}', 'tolak');
        Route::put('pengajuan/terima/{validasi}', 'terima');
        Route::get('validasi', 'tampilvalidasi');
        Route::get('validasi/{id}', 'detailvalidasi');
        Route::get('printpengajuan/{pengajuan}', 'cetak');
    });

    Route::controller(DivisiController::class)->group(function () {
        // Route::get('pengajuan/test','test');
        Route::get('divisi', 'tampil');
        Route::post('divisi/create', 'tambah');
        Route::post('divisi/edit/{id}', 'edit');
        Route::post('divisi/hapus/{satset}', 'hapus');
        Route::get('divisi/{id}', 'detail');
        // data pegawai eyy
        Route::post('divisi/tambahpegawai/', 'tambahpegawai');
        Route::post('divisi/editpegawai/{id}', 'editpegawai');
        Route::post('divisi/hapuspegawai/{sambo}', 'hapuspegawai');
    });

    // Route::controller(AdminController::class)->group(function () {
    //     // data admin eyy

    //     Route::get('admin/tampil','tampil');
    //     Route::post('admin/tambahadmin/','tambahadmin');
    //     Route::post('admin/editadmin/{id}','editadmin');
    //     Route::post('admin/hapusadmin/{sambo}','hapusadmin');

    // });

    Route::controller(AdminController::class)->group(function () {
        // Route::get('pengajuan/test','test');
        Route::get('admin', 'tampil');
        // data pegawai eyy
        Route::post('admin/tambahadmin/', 'tambahAdmin');
        Route::post('admin/editlah/{id}', 'editlah');
        Route::post('admin/hapuslah/{sambo}', 'hapuslah');
    });
});

Route::prefix('divisi')->middleware('auth:divisi')->group(function () {
    Route::controller(PengajuanDivisiController::class)->group(function () {
        // Route::get('admin/pengajuan/test','test');
        Route::get('dashboard', 'dashboardPegawai');
        Route::get('pengajuan', 'tampil');
        Route::get('pengajuan/create', 'tambah');
        Route::post('pengajuan', 'store');
        Route::get('pengajuan/{id}', 'detail');
        Route::get('pengajuan/{id}/edit', 'ubah');
        Route::post('pengajuan/edit', 'perbarui');
        Route::get('pengajuan/hapus/{id}', 'hapus');
        // Route::get('/home/{id}','show');
        Route::put('pengajuan/tolak/{validasi}', 'tolak');
        Route::put('pengajuan/terima/{validasi}', 'terima');
        Route::get('validasi', 'tampilvalidasi');
        Route::get('validasi/{id}', 'detailvalidasi');
    });
});
