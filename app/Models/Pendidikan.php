<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'tm_pendidikan';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }

    public function SuamiIstri()
    {
        return $this->belongsTo(SuamiIstri::class);
    }

    public function Anak()
    {
        return $this->belongsTo(Anak::class);
    }
}
