<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RiwayatJabatanController extends Controller
{
    public function tambah(Request $request)
    {
        $jabatan = new \App\Models\RiwayatJabatan;
        $jabatan->id_peg = $request->id_peg;
        $jabatan->kode_jbts = $request->kode_jbts;
        $jabatan->no_sk = $request->no_sk;
        $jabatan->tgl_sk = $request->tgl_sk;
        $jabatan->pejabat_sk = $request->pejabat_sk;
        $jabatan->kode_gol = $request->kode_gol;
        $jabatan->tmt = $request->tmt;
        $jabatan->ket = $request->ket;
        $jabatan->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/profile/$request->id_peg");
    }

    public function editpage($id, $id1)
    {
        $jabatan = \App\Models\RiwayatJabatan::where('id_jabatan', $id)->first();
        $pegawai = \App\Models\ListPegawai::where('id_peg', $id1)->first();
        $jbts = \App\Models\Jabatanstruktural::all();
        $gol = \App\Models\Golongan::all();
        return view('pegawai.editjabatan', [
            'jabatan' => $jabatan,
            'pegawai' => $pegawai,
            'jbts' => $jbts,
            'gol' => $gol
        ]);

        //  return dd($hukuman);
    }

    public function edit($id, Request $request)
    {
        DB::table('riwayat_jabatan')->where('id_jabatan', $id)->update([
            'id_peg' => $request->id_peg,
            'kode_jbts' => $request->kode_jbts,
            'kode_gol' => $request->kode_gol,
            'no_sk' => $request->no_sk,
            'tgl_sk' => $request->tgl_sk,
            'pejabat_sk' => $request->pejabat_sk,
            'tmt' => $request->tmt,
            'ket' => $request->ket
        ]);
        Alert::success('Sukses Edit', 'Data berhasil di-Edit');
        return redirect("/pegawai/profile/$request->id_peg");
    }

    public function hapus($id, Request $request)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('riwayat_jabatan')->where('id_jabatan', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }
}
