<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = 'kunjungan_luarnegeri';

    public function ListPegawai()
    {
    	return $this->belongsTo('App\ListPegawai');
    }
}
