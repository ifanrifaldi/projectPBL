<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Pengajuan;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pegawai;

class ApiAdminController extends Controller{

    function pegawai(){
        $data['list_pegawai'] = pegawai::all();
        return response()->json( $data);
    }

    function pengajuanPegawai($id){

        $pengajuan = Pengajuan::where('id_pegawai', '=', $id)->get();

        return response()->json($pengajuan);
    }
}
