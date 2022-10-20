<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;
use App\Models\Validasi;
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
        

        return view('adminview.validasi.create',compact('nomor')); 
    }
    function store(){
        $pembelian = new Pembelian;
        $pembelian->id = request('id');
        $pembelian->nomor = request('nomor');
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

        return redirect('admin/validasi')->with('success', 'Data Berhasil Diajukan');
    }
    function show(Pembelian $pembelian){
        $data['pembelian'] = $pembelian;
        return view('adminview.validasi.show' , $data);
    }
    function edit(Validasi $validasi){
        $data['validasi'] = $validasi;
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
    function destroy(Pembelian $pembelian){
        $pembelian->handleDelete();
        $pembelian->delete();
        return redirect('admin/validasi')->with('danger', 'Data Berhasil Dihapus');
    }

    
}