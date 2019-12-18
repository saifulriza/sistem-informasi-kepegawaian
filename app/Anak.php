<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table = 'anak';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }

    public function pendidikan()
    {
        return $this->hasMany('App\Pendidikan', 'kode_pdd', 'kode_pdd');
    }
}
