<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaikKgb extends Model
{
    use HasFactory;
    protected $table = 'naik_kgb';

    public function Gapok()
    {
        return $this->hasOne(Gapok::class, 'kode_gapok', 'kode_gapok');
    }

    public function ListPegawai()
    {
        return $this->beongsTo(ListPegawai::class, 'id_peg', 'id_peg');
    }
}
