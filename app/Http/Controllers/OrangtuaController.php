<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class OrangtuaController extends Controller
{
    public function proses(Request $request)
    {
        $this->validate($request, [

            'nama' => 'required',
            'kelamin' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'keterangan' => 'required',

        ]);

        // insert data ke table pegawai
        DB::table('orangtua')->insert([
            'id_peg' => $request->id_peg,
            'nama_ortu' => $request->nama,
            't_lahir' => $request->t_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jns_kelamin' => $request->kelamin,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'ket' => $request->keterangan,

        ]);
        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }
}
