<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RiwayatjabatanfController extends Controller
{
    public function tambah(Request $request)
    {
        $jabatanf = new \App\Models\Riwayatjabatanf;
        $jabatanf->id_peg = $request->id_peg;
        $jabatanf->kode_jbtf = $request->kode_jbtf;
        $jabatanf->no_sk = $request->no_sk;
        $jabatanf->tgl_sk = $request->tgl_sk;
        $jabatanf->pejabat_sk = $request->pejabat_sk;
        $jabatanf->kode_gol = $request->kode_gol;
        $jabatanf->tmt = $request->tmt;
        $jabatanf->ket = $request->ket;
        $jabatanf->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/profile/$request->id_peg");
    }

    public function edit($id, Request $request)
    {
        DB::table('riwayat_jabatanfungsional')->where('id_jabatanf', $id)->update([
            'id_peg' => $request->id_peg,
            'kode_jbtf' => $request->kode_jbtf,
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

    public function editpage($id, $id1)
    {
        $jabatanf = \App\Models\RiwayatJabatanf::where('id_jabatanf', $id)->first();
        $pegawai = \App\Models\ListPegawai::where('id_peg', $id1)->first();
        $jbtf = \App\Models\jabatanFungsional::all();
        $gol = \App\Models\Golongan::all();
        return view('pegawai.editjabatanf', [
            'jabatanf' => $jabatanf,
            'pegawai' => $pegawai,
            'jbtf' => $jbtf,
            'gol' => $gol

        ]);

        //  return dd($hukuman);
    }



    public function hapus($id, Request $request)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('riwayat_jabatanfungsional')->where('id_jabatanf', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }
}
