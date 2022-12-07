<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Divisi;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class DivisiController extends Controller
{
    function tampil()
    {
        $data['list_divisi'] = Divisi::all();

        return view('admin.divisi.index', $data);
    }

    function tambah(Request $r)
    {
        $r->validate([
            'nama_divisi' => ['required', 'unique:divisi', 'min:2']
        ]);
        $d = new Divisi;
        $d->nama_divisi =  $r->nama_divisi;
        $cek = $d->save();

        if ($cek) {
            return back()->with('success', 'data berhasil di simpan');
        }
        return back()->with('danger', 'data gagal di simpan');
    }

    function edit(Request $r, $id)
    {
        $decrypt = decrypt($id);
        $editData = Divisi::where('id', $decrypt)->update([
            'nama_divisi' => $r->nama_divisi
        ]);

        if ($editData) {
            return back()->with('success', 'data berhasil di simpan');
        }
        return back()->with('danger', 'data gagal di simpan');
    }

    public function detail($divisi)
    {

        $data['list_detail'] = Divisi::with('pegawai')->find($divisi);

        return view('admin.divisi.show', $data);

        // return view('admin.pengajuan.show', [
        //     'pengajuan' => Pengajuan::find($pengajuan)
        // ]);
        // $detail['pengajuan'] = $pengajuan;
        // return($detail);
        // return view('admin.pengajuan.detail', $detail);

    }

    function tambahPegawai(Request $sambo)
    {
        $sambo->validate([
            'nik' => ['required', 'unique:pegawai', 'min:5'],
            'nama' => ['required', 'unique:pegawai', 'min:4'],
            'jabatan' => ['required', 'min:5'],
            'jk' => ['required', 'min:5'],
            'email' => ['required', 'min:5', 'email'],
            'password' => [
                'required',
                'string',
                Password::min(5)
            ]
        ]);
        $peg = new Pegawai;

        $peg->id_divisi = $sambo->id_divisi;
        $peg->nik = $sambo->nik;
        $peg->nama = $sambo->nama;
        $peg->jabatan = $sambo->jabatan;
        $peg->jk = $sambo->jk;
        $peg->email = $sambo->email;
        $peg->password = bcrypt($sambo->password);

        $simpan = $peg->save();
        // return ($peg);

        if ($simpan) {
            return back()->with('success', 'Data berhasil diTambahkan');
        }
        return back()->with('danger', 'Data gagal di Tambahkan');
    }

    function editpegawai(Pegawai $id, Request $sambo)
    {

        if ($sambo->password != null) {

            $id->nik = $sambo->nik;
            $id->nama = $sambo->nama;
            $id->jabatan = $sambo->jabatan;
            $id->jk = $sambo->jk;
            $id->email = $sambo->email;
            $id->password = bcrypt($sambo->password);

            $edit1 = $id->update();
            if ($edit1) {
                return back()->with('success', 'Data Berhasil di Edit');
            }
            return back()->with('dangger', 'Data Gagal di Edit');
        }
    }

    function hapuspegawai(Pegawai $sambo)
    {
        $hapus = $sambo->delete();
        if ($hapus) {
            return back()->with('success', 'data berhasil di Hapus');
            }
            return back()->with('danger', 'data gagal di Hapus');
    }

    function hapus($id)
    {
        // return $id;
        $hapus = decrypt($id);
        // return $hapus;
        $a = Divisi::where('id',$hapus)->delete();
        $b = Pegawai::where('id_divisi', $hapus)->delete();
        if ($a && $b) {
            return redirect('admin/divisi')->with('danger', 'Data berhasil Dihapus');
        }
        return redirect('admin/divisi')->with('danger', 'data gagal dihapus');
    }
}
