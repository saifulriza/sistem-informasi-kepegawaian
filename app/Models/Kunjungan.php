<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;
    protected $table = 'kunjungan_luarnegeri';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }
}
