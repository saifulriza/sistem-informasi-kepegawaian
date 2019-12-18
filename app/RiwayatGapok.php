<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatGapok extends Model
{
    protected $table = 'riwayat_gapok';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai', 'id_peg', 'id_peg');
    }

    public function gapok()
    {
        return $this->hasOne('App\Gapok', 'kode_gapok', 'kode_gapok');
    }
}
