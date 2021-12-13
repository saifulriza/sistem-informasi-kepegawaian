<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    use HasFactory;
    protected $table = 'orangtua';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }
}
