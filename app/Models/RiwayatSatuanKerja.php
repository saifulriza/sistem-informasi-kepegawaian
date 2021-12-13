<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatSatuanKerja extends Model
{
    use HasFactory;
    protected $table = 'riwayat_satuankerja';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }

    public function unitkerja()
    {
        return $this->hasOne(UnitKerja::class, 'kode_unitkerja', 'kode_unitkerja');
    }

    public function satuanorganisasi()
    {
        return $this->hasOne(SatuanOrganisasi::class, 'kode_satuanorg', 'kode_satuanorg');
    }
}
