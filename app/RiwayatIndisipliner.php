<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatIndisipliner extends Model
{
    protected $table= 'riwayat_indisipliner';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai', 'id_peg', 'id_peg');
    }
}
