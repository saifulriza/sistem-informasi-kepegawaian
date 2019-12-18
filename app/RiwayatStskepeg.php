<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatStskepeg extends Model
{
    protected $table= 'riwayat_stskepeg';

    public function ListPegawai()
    {
        return $this->belongsTo('App\ListPegawai');
    }

    public function jabatanstruktural()
    {
        return $this->hasOne('App\Jabatanstruktural', 'kode_jbts', 'kode_jbts');
    }

    public function golongan()
    {
        return $this->hasOne('App\Golongan', 'kode_gol', 'kode_gol');
    }
}

