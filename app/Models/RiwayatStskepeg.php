<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatStskepeg extends Model
{
    use HasFactory;
    protected $table = 'riwayat_stskepeg';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }

    public function jabatanstruktural()
    {
        return $this->hasOne(Jabatanstruktural::class, 'kode_jbts', 'kode_jbts');
    }

    public function golongan()
    {
        return $this->hasOne(Golongan::class, 'kode_gol', 'kode_gol');
    }
}
