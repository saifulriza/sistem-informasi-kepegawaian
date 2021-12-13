<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $table = 'anak';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }

    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'kode_pdd', 'kode_pdd');
    }
}
