<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Middleware\Admin;
use App\Models\Pengajuan;
use App\Models\Barang;
use App\Models\Divisi;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pegawai;
use App\Models\Admin;



class PengajuanController extends controller
{
    public function tampil()
    {
        
        $data['list_pengajuan'] = Pengajuan::all();

        return view('admin.pengajuan.index', $data);
    }

    public function detail($pengajuan)
    {
        $data['list_detail'] = Pengajuan::with('barang')->find($pengajuan);
        return view('admin.pengajuan.show', $data);

        // return view('admin.pengajuan.show', [
        //     'pengajuan' => Pengajuan::find($pengajuan)
        // ]);
        // $detail['pengajuan'] = $pengajuan;
        // return($detail);
        // return view('admin.pengajuan.detail', $detail);
    }


    function tambah()
    {

        $tanggals = Carbon::now()->format('Y-n-d');
        $now = Carbon::now();
        $thnBulan = $now->year.$now->month;
        $cek = Pengajuan::count();
        if ($cek == 0) {
            $urut = 1001;
            $nomor = 'IAR'. $thnBulan . $urut;
        } else {
            $ambil = Pengajuan::all()->last();
            $urut = (int)substr($ambil->no_surat, -1) + 1;
            $nomor = 'IAR'. $thnBulan . $urut;

        }
        return view('admin.pengajuan.create',compact('nomor'));

    }

    function store(Request $r)
    {
        // return ($r);
        $pengajuan = new Pengajuan;
        // $pengajuan->id = request('id');
        $pengajuan->no_surat = request('no_surat');
        $pengajuan->id_pegawai = request('id_pegawai');
        $pengajuan->nama_pengaju = request('nama_pengaju');
        $pengajuan->tgl_pengajuan = request('tgl_pengajuan');
        $pengajuan->tgl_dibutuhkan = request('tgl_dibutuhkan');
        $pengajuan->nama_kegiatan = request('nama_kegiatan');
        $pengajuan->diketahui = request('diketahui');
        $pengajuan->disetujui = request('disetujui');
        $pengajuan->status = 'Diproses';

        $pengajuan->save();

        $file = $r->file('foto');

                for ($n=0; $n < count($r->nama_barang); $n++) {

                    $ran = Str::random(5);
                    $namaFile = $ran.'.'.$file[$n]->getClientOriginalExtension();
                    $filename = $file[$n]->storeAs('barang', $namaFile);


                    $bar = new Barang;
                    $bar->id_pengajuan = $pengajuan->id;
                    $bar->nama_barang = $r->nama_barang[$n];
                    $bar->ket = $r->ket[$n];
                    $bar->foto = 'app/'.$filename;

                    $bar->jumlah = $r->jumlah[$n];
                    $bar->lokasi = $r->lokasi[$n];
                    $bar->kategori = $r->kategori[$n];
                    $bar->save();

                }

        return redirect('admin/pengajuan')->with('success', 'Data Berhasil Ditambahkan');
    }

    function ubah($pengajuan)
    {
        $data['pengajuan'] = Pengajuan::find($pengajuan);
        return view('admin.pengajuan.edit', $data);
    }

    function perbarui(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nomor' => ['required', 'unique:pengajuan', 'min:5'],
        //     'nomor' => ['required', 'unique:pengajuan', 'min:5'],
        //     'id_divisi' => ['required'],
        // ]);
        // $pengajuan->id = request('id');
        $jadi = DB::table('pengajuan')
            ->where('id', $request->id)
            ->update([
                'no_surat' => request('no_surat'),
                'nama_pengaju' =>  request('nama_pengaju'),
                'tanggal_pengajuan' => request('tanggal_pengajuan'),
                'nama_divisi' => request('nama_divisi'),
                'nama_kegiatan' => request('nama_kegiatan'),
                'diketahui_oleh' => request('diketahui_oleh'),
                'disetujui_oleh' => request('disetujui_oleh')
            ]);
        if ($jadi) {

            return redirect('admin/pengajuan')->with('success', 'data gagal di ubah');
        }
        return redirect('admin/pengajuan')->with('danger', 'data gagal di ubah');
        // $barang->save();
    }

    function hapus($id)
    {
        // return $id;
        $a = Pengajuan::where('id', $id)->delete();
        $b = Barang::where('id_pengajuan', $id)->delete();
        if ($a && $b) {
            return back()->with('danger', 'data berhasil di hapus');
        }
        return redirect('admin/pengajuan')->with('danger', 'Data Berhasil Dihapus');
    }



// handle validasi

public function tampilvalidasi()
    {
        $data['list_pengajuan'] = Pengajuan::all();

        return view('admin.validasi.index', $data);
    }

    public function detailvalidasi($pengajuan)
    {
        $data['list_detail'] = Pengajuan::with('barang')->find($pengajuan);
        return view('admin.validasi.show', $data);

        // return view('admin.pengajuan.show', [
        //     'pengajuan' => Pengajuan::find($pengajuan)
        // ]);
        // $detail['pengajuan'] = $pengajuan;
        // return($detail);
        // return view('admin.pengajuan.detail', $detail);
    }

    function dashboard(){
        
        $data['list_pengajuan'] = Pengajuan::all();
        $data['list_divisi'] = Divisi::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['total_divisi'] = Divisi::orderBy('id', 'ASC')->count();
        $data['total_pegawai'] = Pegawai::orderBy('id', 'ASC')->count();
        $data['total_admin'] = Admin::orderBy('id', 'ASC')->count();
        $data['total_pengajuan'] = Pengajuan::orderBy('id', 'ASC')->count();
        $data['diproses'] = Pengajuan::where('status', 'Diproses')->count();
        $data['diterima'] = Pengajuan::where('status', 'Diterima')->count();
        $data['ditolak'] = Pengajuan::where('status', 'Ditolak')->count();
        $data['admin'] = $pegawai = auth()->guard('admin')->user();
        return view('admin.dashboard.index', $data);
    }

    // HANDLE VALIDASI
    function tolak(Pengajuan $validasi){
        $validasi->status = 'Ditolak';
        $validasi->save();
        return redirect('admin/validasi');
    }

    function terima(Pengajuan $validasi){
        $validasi->status =  'Diterima';
        $validasi->save();
        return redirect('admin/validasi');
    }

    function cetak($pengajuan)
    {

        $data['list_detail'] = Pengajuan::with('barang')->find($pengajuan);
        return view('admin.validasi.cetak', $data);
    }


}
