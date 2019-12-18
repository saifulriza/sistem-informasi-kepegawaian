<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatJabatanf extends Model
{
    protected $table ="riwayat_jabatanfungsional";

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }

    public function jabatanfungsional()
    {
        return $this->hasOne('App\JabatanFungsional', 'kode_jbtf', 'kode_jbtf');
    }
}
