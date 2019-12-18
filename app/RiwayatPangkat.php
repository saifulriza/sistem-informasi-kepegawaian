<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPangkat extends Model
{
    protected $table= 'riwayat_pangkat';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }

    public function golongan()
    {
        return $this->hasOne('App\Golongan', 'kode_gol', 'kode_gol');
    }
}
