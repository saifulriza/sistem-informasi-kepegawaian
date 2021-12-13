<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensiun extends Model
{
    use HasFactory;
    protected $table = "pensiun";

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class, 'id_peg', 'id_peg');
    }
}
