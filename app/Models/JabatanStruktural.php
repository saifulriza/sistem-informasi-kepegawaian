<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanStruktural extends Model
{
    use HasFactory;
    protected $table = "tm_jabatanstruktural";

    public function riwayatjabatan()
    {
        return $this->belongsTo(RiwayatJabatan::class);
    }

    public function riwayatstskepeg()
    {
        return $this->belongsTo(RiwayatStskepeg::class);
    }
}
