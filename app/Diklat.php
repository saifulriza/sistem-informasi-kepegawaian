<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diklat extends Model
{
    protected $table="tm_diklat";

    public function riwayatdklat()
    {
    	return $this->belongsTo('App\RiwayatDiklat');
    }
}
