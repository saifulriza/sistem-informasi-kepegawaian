<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuamiIstri extends Model
{
    protected $table='istri_suami';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }

    public function pendidikan()
    {
        return $this->hasMany('App\Pendidikan', 'kode_pdd', 'kode_pdd');
    }
}
