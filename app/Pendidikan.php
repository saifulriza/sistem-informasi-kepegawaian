<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table='tm_pendidikan';
    
    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }

    public function SuamiIstri()
    {
    	return $this->belongsTo('App\SuamiIstri');
    }

    public function Anak()
    {
    	return $this->belongsTo('App\Anak');
    }
}

