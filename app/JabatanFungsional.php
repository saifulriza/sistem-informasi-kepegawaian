<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanFungsional extends Model
{
    protected $table= 'tm_jabatanf';

    
    public function riwayatjabatanf()
    {
    	return $this->belongsTo('App\RiwayatJabatanf');
    }
}
