<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensiun extends Model
{
    protected $table="pensiun";

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai', 'id_peg', 'id_peg');
    }
}
