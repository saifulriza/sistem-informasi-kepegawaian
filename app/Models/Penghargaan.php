<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    use HasFactory;
    protected $table = 'penghargaan';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }
}
