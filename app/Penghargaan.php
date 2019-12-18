<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    protected $table = 'penghargaan';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }
}
