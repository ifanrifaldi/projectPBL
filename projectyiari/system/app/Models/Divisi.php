<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Divisi extends Model
{
    use HasFactory;
    protected $table = "divisi";

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'id_divisi', 'id');
    }


    // public function Pegawai()
    // {
    //     return $this->belongsTo(Pegawai::class, 'id');
    // }
}
