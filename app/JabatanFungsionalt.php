<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanFungsionalt extends Model
{
    protected $table = 'tm_jabatanft';

    public function riwayatjabatanft()
    {
    	return $this->belongsTo('App\RiwayatJabatanft');
    }
}
