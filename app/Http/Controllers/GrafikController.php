<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrafikController extends Controller
{
    public function index(){
        $lk = \App\ListPegawai::where('jns_kelamin', 'L')->count();
        $pr = \App\ListPegawai::where('jns_kelamin', 'P')->count();
        $menikah = \App\ListPegawai::where('sts_marital', 'Menikah')->count();
        $bmenikah = \App\ListPegawai::where('sts_marital', 'Belum menikah')->count();
        return view('pegawai.grafik', [
            'lk' => $lk,
            'pr' => $pr,
            'menikah' => $menikah,
            'bmenikah' => $bmenikah
        ]);
    }
}
