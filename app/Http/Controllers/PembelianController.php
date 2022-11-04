<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;
use App\Models\Divisi;
use Carbon\Carbon;


class PembelianController extends Controller{
    function index(){
        $data['list_pembelian'] = Pembelian::all();
        return view('template.pembelian.index', $data);
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
        
        $data['divisi'] = $divisi = auth()->guard('divisi')->user();
        

        return view('template.pembelian.create',compact('nomor'), $data); 
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

        return redirect('divisi/pembelian')->with('success', 'Data Berhasil Diajukan');
    }
    function show(Pembelian $pembelian){
        $data['pembelian'] = $pembelian;
        return view('template.pembelian.show' , $data);
    }
    function edit(Pembelian $pembelian){
        $data['pembelian'] = $pembelian;
        return view('template.pembelian.edit' , $data);
    }
    function update(Pembelian $pembelian){
        
        $pembelian->tanggal_pengajuan = request('tanggal_pengajuan');
        $pembelian->tanggal_dibutuhkan = request('tanggal_dibutuhkan');
        $pembelian->nama_pengaju = request('nama_pengaju');
        $pembelian->nama_divisi = request('nama_divisi');
        $pembelian->nama_kegiatan = request('nama_kegiatan');
        $pembelian->nama_barang = request('nama_barang');
        $pembelian->deskripsi_barang = request('deskripsi_barang');
        $pembelian->jumlah = request('jumlah');
        $pembelian->lokasi = request('lokasi');
        $pembelian->class = request('class');
        $pembelian->diketahui_oleh = request('diketahui_oleh');
        $pembelian->disetujui_oleh = request('disetujui_oleh');
        
        $pembelian->save();

        $pembelian->handleUploadFoto();

        return redirect('divisi/pembelian')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Pembelian $pembelian){
        $pembelian->handleDelete();
        $pembelian->delete();
        return redirect('divisi/pembelian')->with('danger', 'Data Berhasil Dihapus');
    }

    
}