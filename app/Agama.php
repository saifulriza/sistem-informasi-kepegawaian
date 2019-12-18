<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $table = 'tm_agama';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }
}
