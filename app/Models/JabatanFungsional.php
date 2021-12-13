<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanFungsional extends Model
{
    use HasFactory;
    protected $table = 'tm_jabatanf';


    public function riwayatjabatanf()
    {
        return $this->belongsTo(RiwayatJabatanf::class);
    }
}
