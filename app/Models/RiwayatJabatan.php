<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatJabatan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_jabatan';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }

    public function jabatanstruktural()
    {
        return $this->hasOne(Jabatanstruktural::class, 'kode_jbts', 'kode_jbts');
    }
}
