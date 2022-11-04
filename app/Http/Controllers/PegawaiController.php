<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
   
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('adminview.pegawai.index', $data);
    }

    
    public function create()
    {
        $data['list_divisi'] = Divisi::all();
        return view('adminview.pegawai.create', $data);
    }

   
    public function store(Request $request)
    {
        $pegawai  = New Pegawai;
        $pegawai->id_divisi = request('id_divisi');
        $pegawai->nama = request('nama');
        $pegawai->nik = request('nik');
        $pegawai->jabatan = request('jabatan');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->email = request('email');
        $pegawai->username = request('nik');
        $pegawai->password = request('password');
        $pegawai->save();

        return redirect('admin/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
