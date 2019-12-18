<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    protected $table = "unit_kerja"; 

    public function riwayatsatuankerja()
    {
        return $this->belongsTo('App\RiwayatSatuankerja');
    }
}
