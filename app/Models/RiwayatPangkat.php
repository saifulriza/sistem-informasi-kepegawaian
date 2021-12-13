<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPangkat extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pangkat';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }

    public function golongan()
    {
        return $this->hasOne(Golongan::class, 'kode_gol', 'kode_gol');
    }
}
