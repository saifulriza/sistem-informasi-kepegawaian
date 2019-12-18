<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatSatuankerja extends Model
{
    protected $table = 'riwayat_satuankerja';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }

    public function unitkerja()
    {
        return $this->hasOne('App\UnitKerja', 'kode_unitkerja', 'kode_unitkerja');
    }

    public function satuanorganisasi()
    {
        return $this->hasOne('App\SatuanOrganisasi', 'kode_satuanorg', 'kode_satuanorg');
    }
}
