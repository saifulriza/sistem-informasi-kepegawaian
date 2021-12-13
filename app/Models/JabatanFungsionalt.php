<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanFungsionalt extends Model
{
    use HasFactory;
    protected $table = 'tm_jabatanft';

    public function riwayatjabatanft()
    {
        return $this->belongsTo(RiwayatJabatanft::class);
    }
}
