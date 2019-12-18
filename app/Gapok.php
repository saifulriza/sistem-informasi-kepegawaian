<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gapok extends Model
{
    protected $table ='tm_gapok';

    public function NaikKgb()
    {
    	return $this->belongsTo('App\NaikKgb', 'kode_gapok', 'kode_gapok');
    }

    public function riwayatgapok()
    {
    	return $this->belongsTo('App\RiwayatGapok');
    }

}
