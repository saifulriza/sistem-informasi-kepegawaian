<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatanstruktural extends Model
{
    protected $table="tm_jabatanstruktural";

    public function riwayatjabatan()
    {
    	return $this->belongsTo('App\RiwayatJabatan');
    }

    public function riwayatstskepeg()
    {
    	return $this->belongsTo('App\RiwayatStskepeg');
    }
}
