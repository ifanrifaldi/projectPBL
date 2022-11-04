<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;
use App\Models\Validasi;
use App\Models\Divisi;
use Carbon\Carbon;


class ValidasiController extends Controller{
    function index(){
        $data['list_pembelian'] = Pembelian::all();
        return view('adminview.validasi.index', $data);
    } 
    function create(){
        $user = request()->user();
        $tanggals = Carbon::now()->format('Y-n-d');
        $now = Carbon::now();
        $thnBulan = $now->year.$now->month;
        $cek = Pembelian::count();
        if ($cek == 0) {
            $urut = 0001;
            $nomor = 'IAR'. $thnBulan . $urut;
        } else {
            $ambil = Pembelian::all()->last();
            $urut = (int)substr($ambil->nomor, -4) + 1;
            $nomor = 'IAR'. $thnBulan . $urut;
        }

        $data['list_divisi'] = Divisi::all();
        

        return view('adminview.validasi.create',compact('nomor'), $data); 
    }
    function store(){
        $pembelian = new Pembelian;
        $pembelian->id = request('id');
        $pembelian->nomor = request('nomor');
        $pembelian->tanggal_pengajuan = request('tanggal_pengajuan');
        $pembelian->tanggal_dibutuhkan = request('tanggal_dibutuhkan');
        $pembelian->id_divisi = request('id_divisi');
        $pembelian->nama_pengaju = request('nama_pengaju');
        $pembelian->nama_divisi = request('nama_divisi');
        $pembelian->nama_kegiatan = request('nama_kegiatan');
        $pembelian->nama_barang = request('nama_barang');
        $pembelian->deskripsi_barang = request('deskripsi_barang');
        $pembelian->jumlah = request('jumlah');
        $pembelian->lokasi = request('lokasi');
        $pembelian->kategori = request('kategori');
        $pembelian->diketahui_oleh = request('diketahui_oleh');
        $pembelian->disetujui_oleh = request('disetujui_oleh');

        $pembelian->save();

        $pembelian->handleUploadFoto();

        return redirect('admin/validasi')->with('success', 'Data Berhasil Diajukan');
    }
    function show( $pembelian){
        $data ['pembelian'] = Pembelian::find($pembelian);
        return view('adminview.validasi.show' , $data);
    }
    function edit( $pembelian){
        $data ['pembelian'] = Pembelian::find($pembelian);
        return view('adminview.validasi.edit' , $data);
    }
    function update(Pembelian $pembelian){
        
        $pembelian->tanggal_pengajuan = request('tanggal_pengajuan');
        $pembelian->tanggal_dibutuhkan = request('tanggal_dibutuhkan');
        $pembelian->nama = request('nama');
        $pembelian->nama_divisi = request('nama_divisi');
        $pembelian->nama_kegiatan = request('nama_kegiatan');
        $pembelian->nama_barang = request('nama_barang');
        $pembelian->deskripsi_barang = request('deskripsi_barang');
        // $pembelian->foto = request('foto');
        $pembelian->jumlah = request('jumlah');
        $pembelian->lokasi = request('lokasi');
        $pembelian->class = request('class');
        $pembelian->diketahui_oleh = request('diketahui_oleh');
        $pembelian->disetujui_oleh = request('disetujui_oleh');
        
        $pembelian->save();

        $pembelian->handleUploadFoto();

        return redirect('admin/validasi')->with('success', 'Data Berhasil Diedit');
    }
    function destroy( $pembelian){
        Pembelian::destroy($pembelian);
        return redirect('admin/validasi')->with('danger', 'Data Berhasil Dihapus');
    }

    
}