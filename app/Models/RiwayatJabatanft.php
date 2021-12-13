<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatJabatanft extends Model
{
    use HasFactory;
    protected $table = "riwayat_jabatanftambahan";

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }

    public function jabatanfungsionalt()
    {
        return $this->hasOne(JabatanFungsionalt::class, 'kode_jbtft', 'kode_jbtft');
    }
}
