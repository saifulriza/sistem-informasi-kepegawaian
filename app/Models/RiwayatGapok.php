<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatGapok extends Model
{
    use HasFactory;
    protected $table = 'riwayat_gapok';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class, 'id_peg', 'id_peg');
    }

    public function gapok()
    {
        return $this->hasOne(Gapok::class, 'kode_gapok', 'kode_gapok');
    }
}
