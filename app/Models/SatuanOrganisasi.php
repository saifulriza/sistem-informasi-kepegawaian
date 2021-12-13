<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanOrganisasi extends Model
{
    use HasFactory;
    protected $table = 'tm_satuanorganisasi';

    public function riwayatsatuankerja()
    {
        return $this->belongsTo(RiwayatSatuankerja::class);
    }
}
