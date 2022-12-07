<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Pengajuan;
use App\Models\Divisi;

class Pegawai extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "pegawai";

    // public function pengajuan()
    // {
    //     return $this->hasMany(Pengajuan::class, 'id_pegawai', 'id');
    // }

    function Pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'id');
    }

    function Divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }
}
