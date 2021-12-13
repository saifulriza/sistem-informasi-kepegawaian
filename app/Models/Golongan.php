<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;
    protected $table = 'tm_golongan';

    public function riwayatpangkat()
    {
        return $this->belongsTo(RiwayatPangkat::class);
    }

    public function riwayatstskepeg()
    {
        return $this->belongsTo(RiwayatStskepeg::class);
    }
}
