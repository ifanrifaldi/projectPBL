<?php

namespace App\Models;
use App\Models\Model;
use App\Models\ModelAuthenticate;
use App\Models\Divisi;

class Pegawai extends ModelAuthenticate
{
    
    public $table="pegawai";
    
    function Divisi(){
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }
    
}