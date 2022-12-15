<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiAdminController;



Route::controller(ApiAdminController::class)->group(function () {
    Route::get('pegawai', 'pegawai');
    Route::get('pegawai/pengajuan/{id}', 'pengajuanPegawai');
});
