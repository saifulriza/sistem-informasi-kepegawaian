<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatIndisipliner extends Model
{
    use HasFactory;
    protected $table = 'riwayat_indisipliner';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class, 'id_peg', 'id_peg');
    }
}
