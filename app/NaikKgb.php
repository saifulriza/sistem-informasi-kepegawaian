<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NaikKgb extends Model
{
    protected $table = 'naik_kgb';

    public function Gapok()
    {
        return $this->hasOne('App\Gapok', 'kode_gapok', 'kode_gapok');
    }

    public function ListPegawai()
    {
    	return $this->beongsTo('App\ListPegawai', 'id_peg', 'id_peg');
    }
}
