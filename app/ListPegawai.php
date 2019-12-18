<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListPegawai extends Model
{
    protected $table='pegawai';

    public function agama()
    {
        return $this->hasOne('App\Agama', 'kode_agama', 'kode_agama');
    }

    public function pensiun()
    {
        return $this->hasOne('App\Pensiun', 'id_pensiun', 'id_pensiun');
    }

    public function pendidikan()
    {
        return $this->hasMany('App\Pendidikan', 'kode_pdd', 'kode_pdd');
    }

    public function suamiistri()
    {
        return $this->hasMany('App\SuamiIstri', 'id_peg', 'id_peg');
    }

    public function naikkgb()
    {
        return $this->hasMany('App\NaikKgb', 'id_peg', 'id_peg');
    }

    public function anak()
    {
        return $this->hasMany('App\Anak', 'id_peg', 'id_peg');
    }

    public function orangtua()
    {
        return $this->hasMany('App\OrangTua', 'id_peg', 'id_peg');
    }

    public function riwayatdiklat()
    {
        return $this->hasMany('App\RiwayatDiklat',  'id_peg', 'id_peg');
    }

    public function riwayatgapok()
    {
        return $this->hasMany('App\RiwayatGapok',  'id_peg', 'id_peg');
    }

    
    public function penghargaan()
    {
        return $this->hasMany('App\Penghargaan', 'kode_pdd', 'kode_pdd');
    }

    public function riwayatindisipliner()
    {
        return $this->hasMany('App\RiwayatIndisipliner',  'id_peg', 'id_peg');
    }

    public function riwayatjabatan()
    {
        return $this->hasMany('App\RiwayatJabatan', 'id_peg', 'id_peg');
    }

    public function riwayatjabatanf()
    {
        return $this->hasMany('App\RiwayatJabatanf', 'id_peg', 'id_peg');
    }

    public function riwayatjabatanft()
    {
        return $this->hasMany('App\RiwayatJabatanft', 'id_peg', 'id_peg');
    }

    public function riwayatorganisasi()
    {
        return $this->hasMany('App\RiwayatOrganisasi', 'id_peg', 'id_peg');
    }

    public function riwayatpangkat()
    {
        return $this->hasMany('App\RiwayatPangkat', 'id_peg', 'id_peg');
    }
    
    public function riwayatsatuankerja()
    {
        return $this->hasMany('App\RiwayatSatuankerja', 'id_peg', 'id_peg');
    }

    public function riwayatstskepeg()
    {
        return $this->hasMany('App\RiwayatStskepeg', 'id_peg', 'id_peg');
    }
}
