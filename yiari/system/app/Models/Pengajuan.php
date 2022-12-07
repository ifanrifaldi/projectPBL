<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attributes\BarangAttributes;
use App\Models\Pegawai;


class Pengajuan extends Model
{
    use HasFactory;
    protected $table = "pengajuan";

public function barang()
{
    return $this->hasMany(Barang::class, 'id_pengajuan', 'id');
}
public function divisi()
{
    return $this->hasMany(Divisi::class, 'id_pegawai', 'id');
}

function Pegawai(){
    return $this->belongsTo(Pegawai::class, 'id_pegawai');
}
}

