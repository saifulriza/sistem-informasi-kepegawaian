<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatuanOrganisasi extends Model
{
    protected $table = 'tm_satuanorganisasi';

    public function riwayatsatuankerja()
    {
        return $this->belongsTo('App\RiwayatSatuankerja');
    }
}
