<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = 'tm_golongan';

    public function riwayatpangkat()
    {
    	return $this->belongsTo('App\RiwayatPangkat');
    }
    
    public function riwayatstskepeg()
    {
    	return $this->belongsTo('App\RiwayatStskepeg');
    }
}
