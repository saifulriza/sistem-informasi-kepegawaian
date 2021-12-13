<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatOrganisasi extends Model
{
    use HasFactory;
    protected $table = 'riwayat_organisasi';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }
}
