<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GapokController extends Controller
{
    public function tambah(Request $request)
    {
        $this->validate($request, [

            'nama_diklat' => 'required',
            'tgl_selesai' => 'required',
            'nmr_sertifikat' => 'required',
            'thn_sertifikat' => 'required',
            'penyelenggara' => 'required',
            'jenis_diklat' => 'required',
            'tgl_mulai' => 'required',

        ]);

        // insert data ke table pegawai
        DB::table('riwayat_diklat')->insert([
            'id_peg' => $request->id_peg,
            'nama_diklat' => $request->nama_diklat,
            'tgl_selesai' => $request->tgl_selesai,
            'no_sertifikat' => $request->nmr_sertifikat,
            'thn_sertifikat' => $request->thn_sertifikat,
            'penyelenggara' => $request->penyelenggara,
            'kode_diklat' => $request->jenis_diklat,
            'tgl_mulai' => $request->tgl_mulai,

        ]);
        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }


    public function edit($id, Request $request)
    {
        $this->validate($request, [

            'nama_diklat' => 'required',
            'tgl_selesai' => 'required',
            'nmr_sertifikat' => 'required',
            'thn_sertifikat' => 'required',
            'penyelenggara' => 'required',
            'jenis_diklat' => 'required',
            'tgl_mulai' => 'required',

        ]);

        // insert data ke table pegawai
        DB::table('riwayat_diklat')->where('id_diklat', $id)->update([

            'nama_diklat' => $request->nama_diklat,
            'tgl_selesai' => $request->tgl_selesai,
            'no_sertifikat' => $request->nmr_sertifikat,
            'thn_sertifikat' => $request->thn_sertifikat,
            'penyelenggara' => $request->penyelenggara,
            'kode_diklat' => $request->jenis_diklat,
            'tgl_mulai' => $request->tgl_mulai,

        ]);
        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }


    public function hapus($id, Request $request)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('riwayat_diklat')->where('id_diklat', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }
}
