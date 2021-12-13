<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatJabatanf extends Model
{
    use HasFactory;
    protected $table = "riwayat_jabatanfungsional";

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }

    public function jabatanfungsional()
    {
        return $this->hasOne(JabatanFungsional::class, 'kode_jbtf', 'kode_jbtf');
    }
}
