<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gapok extends Model
{
    use HasFactory;
    protected $table = 'tm_gapok';

    public function NaikKgb()
    {
        return $this->belongsTo(NaikKgb::class, 'kode_gapok', 'kode_gapok');
    }

    public function riwayatgapok()
    {
        return $this->belongsTo(RiwayatGapok::class);
    }
}
