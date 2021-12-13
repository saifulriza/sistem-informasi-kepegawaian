<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class SuamiistriController extends Controller
{
    public function proses(Request $request)
    {
        $this->validate($request, [

            'nama' => 'required',
            'kelamin' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kelamin' => 'required',
            'pendidikan' => 'required',
            'tgl_menikah' => 'required',
            'sts_tunjangan' => 'required',
            'keterangan' => 'required',

        ]);

        // insert data ke table pegawai
        DB::table('istri_suami')->insert([
            'id_peg' => $request->id_peg,
            'nama_istri_suami' => $request->nama,
            't_lahir' => $request->t_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jns_kelamin' => $request->kelamin,
            'kode_pdd' => $request->pendidikan,
            'sts_tunjangan' => $request->sts_tunjangan,
            'tgl_menikah' => $request->tgl_menikah,
            'ket' => $request->keterangan,

        ]);
        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }
}
