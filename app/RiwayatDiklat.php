<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatDiklat extends Model
{
    protected $table = "riwayat_diklat";

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai', 'id_peg', 'id_peg');
    }

    public function diklat()
    {
        return $this->hasOne('App\Diklat', 'kode_diklat', 'kode_diklat');
    }
}
