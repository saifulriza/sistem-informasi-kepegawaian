<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatJabatan extends Model
{
    protected $table = 'riwayat_jabatan';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }

    public function jabatanstruktural()
    {
        return $this->hasOne('App\Jabatanstruktural', 'kode_jbts', 'kode_jbts');
    }
}
