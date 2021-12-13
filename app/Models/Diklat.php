<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diklat extends Model
{
    use HasFactory;
    protected $table = "tm_diklat";

    public function riwayatdklat()
    {
        return $this->belongsTo(RiwayatDiklat::class);
    }
}
