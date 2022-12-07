<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller

{

    function index()
    {
        return view('admin.dashboard');
    }

    function tampil()
    {
        $data['list_admin'] = Admin::all();

        return view('admin.admin.index', $data);
    }

    function tambahAdmin(Request $sambo)
    {
        $sambo->validate([
            'nik' => ['required', 'unique:admin', 'min:5'],
            'nama' => ['required', 'unique:admin', 'min:4'],
            'password' => [
                'required',
                'string',
                Password::min(5)
            ]
        ]);
        $peg = new Admin;
        $peg->nik = $sambo->nik;
        $peg->nama = $sambo->nama;
        $peg->email = $sambo->email;
        $peg->jabatan = $sambo->jabatan;
        $peg->password = bcrypt($sambo->password);

        $simpan = $peg->save();
        // return ($peg);


        if ($simpan) {
            return back()->with('success', 'Data berhasil diTambahkan');
        }
        return back()->with('danger', 'Data gagal di Tambahkan');
    }

    function editAdmin(Admin $id, Request $sambo)
    {

        if ($sambo->password != null) {

            $id->nik = $sambo->nik;
            $id->nama = $sambo->nama;
            $id->email = $sambo->email;
            $id->jabatan = $sambo->jabatan;
            $id->password = bcrypt($sambo->password);

            $edit1 = $id->update();
            if ($edit1) {
                return back()->with('success', 'Data Berhasil di Edit');
            }
            return back()->with('dangger', 'Data Gagal di Edit');
        }
    }

    function hapusAdmin(Admin $sambo)
    {
        $hapus = $sambo->delete();
        if ($hapus) {
            return back()->with('success', 'data berhasil di Hapus');
            }
            return back()->with('danger', 'data gagal di Hapus');
    }
}
