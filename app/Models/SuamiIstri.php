<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuamiIstri extends Model
{
    use HasFactory;
    protected $table = 'istri_suami';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }

    public function pendidikan()
    {
        return $this->hasMany('App\Pendidikan', 'kode_pdd', 'kode_pdd');
    }
}
