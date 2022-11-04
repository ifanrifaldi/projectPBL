<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;


class AdminController extends Controller{

    function index(){
        
        return view('adminview.index');
    } 
    function create(){
        $user = request()->user();
        return view('admin.create');
    }
    function store(){
        $pembelian = new Pembelian;
        $pembelian->id = request('id');
        $pembelian->nomor = request('nomor');
        $pembelian->tanggal_pengajuan = request('tanggal_pengatanggal_dibutuhkan');
        $pembelian->tanggal_dibutuhkan = request('tanggal_dibutuhkan');
        $pembelian->nama = request('nama');
        $pembelian->nama_divisi = request('nama_divisi');
        $pembelian->nama_kegiatan = request('nama_kegiatan');
        $pembelian->nama_barang = request('nama_barang');
        $pembelian->deskripsi_barang = request('deskripsi_barang');
        $pembelian->foto = request('foto');
        $pembelian->jumlah = request('jumlah');
        $pembelian->lokasi = request('lokasi');
        $pembelian->class = request('class');
        $pembelian->diketahui_oleh = request('diketahui_oleh');
        $pembelian->disetujui_oleh = request('disetujui_oleh');

        $pembelian->save();

        $pembelian->handleUploadFoto();

        return redirect('pembelian')->with('success', 'Data Berhasil Diajukan');
    }
    function show(Pembelian $pembelian){
        $data['pembelian'] = $pembelian;
        return view('produk.show' , $data);
    }
    function edit(Pembelian $pembelian){
        $data['produk'] = $pembelian;
        return view('produk.edit' , $data);
    }
    function update(Pembelian $pembelian){
        $pembelian = new Pembelian;
        $pembelian->id = request('id');
        $pembelian->nomor = request('nomor');
        $pembelian->tanggal_pengajuan = request('tanggal_pengatanggal_dibutuhkan');
        $pembelian->tanggal_dibutuhkan = request('tanggal_dibutuhkan');
        $pembelian->nama = request('nama');
        $pembelian->nama_divisi = request('nama_divisi');
        $pembelian->nama_kegiatan = request('nama_kegiatan');
        $pembelian->nama_barang = request('nama_barang');
        $pembelian->deskripsi_barang = request('deskripsi_barang');
        $pembelian->foto = request('foto');
        $pembelian->jumlah = request('jumlah');
        $pembelian->lokasi = request('lokasi');
        $pembelian->class = request('class');
        $pembelian->diketahui_oleh = request('diketahui_oleh');
        $pembelian->disetujui_oleh = request('disetujui_oleh');
        
        $pembelian->save();

        $pembelian->handleUploadFoto();

        return redirect('pembelian')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Pembelian $pembelian){
        $pembelian->handleDelete();
        $pembelian->delete();
        return redirect('pembelian')->with('danger', 'Data Berhasil Dihapus');
    }

    
}