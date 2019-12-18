<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatJabatanft extends Model
{
    protected $table="riwayat_jabatanftambahan";

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }

    public function jabatanfungsionalt()
    {
        return $this->hasOne('App\JabatanFungsionalt', 'kode_jbtft', 'kode_jbtft');
    }
}
