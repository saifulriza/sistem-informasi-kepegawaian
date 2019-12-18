<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatOrganisasi extends Model
{
    protected $table = 'riwayat_organisasi';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }
}
