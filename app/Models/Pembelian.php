<?php

namespace App\Models;
use App\models\Traits\Attributes\PembelianAttributes;
use App\Models\Divisi;

class Pembelian extends Model
{
    use PembelianAttributes;
    public $table="pembelian";
    
    function Divisi(){
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }

}