<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    protected $table = 'orangtua';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }
}
