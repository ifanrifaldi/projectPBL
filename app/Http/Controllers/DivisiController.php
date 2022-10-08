<?php

namespace App\Http\Controllers;
use App\Models\Divisi;


class DivisiController extends Controller {
    function index(){
        $data['list_divisi'] = Divisi::all();
        return view('divisi.index', $data);

    }
    function create(){
        return view('divisi.create');
    }

    function store(){

        $divisi = new Divisi;
        $divisi->nama_divisi = request('nama_divisi');
        $divisi->password = request('password');

        $divisi->save();
        return redirect('divisi')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(Divisi $divisi){

        $data['divisi'] = $divisi;
        return view('divisi.show', $data);
    }

    function edit(Divisi $divisi){
        $data['user'] = $divisi;
        return view('divisi.edit', $data);
        
    }
    function update(Divisi $divisi){
        $divisi->nama_divisi = request('nama_divisi');
        if(request('password')) $divisi->password = request('password');
        $divisi->save();

        return redirect('divisi')->with('warning', 'Data Berhasil Diedit');
    }

    function destroy(Divisi $divisi){
        $divisi->delete();

        return redirect('divisi')->with('danger', 'Data Berhasil Dihapus');
    }
}