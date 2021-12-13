<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RiwayatHukumanController extends Controller
{
    public function tambah(Request $request)
    {
        $hukuman = new \App\Models\RiwayatIndisipliner;
        $hukuman->id_peg = $request->id_peg;
        $hukuman->hukuman = $request->hukuman;
        $hukuman->no_sk = $request->no_sk;
        $hukuman->tgl_sk = $request->tgl_sk;
        $hukuman->pejabat_sk = $request->pejabat_sk;
        $hukuman->ket = $request->ket;
        $hukuman->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/profile/$request->id_peg");
    }

    public function edit($id, Request $request)
    {
        DB::table('riwayat_indisipliner')->where('id_hukuman', $id)->update([
            'id_peg' => $request->id_peg,
            'hukuman' => $request->hukuman,
            'no_sk' => $request->no_sk,
            'tgl_sk' => $request->tgl_sk,
            'pejabat_sk' => $request->pejabat_sk,
            'ket' => $request->ket
        ]);
        Alert::success('Sukses Edit', 'Data berhasil di-Edit');
        return redirect("/pegawai/profile/$request->id_peg");
    }

    public function editpage($id, $id1)
    {
        $hukuman = \App\Models\RiwayatIndisipliner::where('id_hukuman', $id)->first();
        $pegawai = \App\Models\ListPegawai::where('id_peg', $id1)->first();
        return view('pegawai.edithukuman', [
            'hukuman' => $hukuman,
            'pegawai' => $pegawai
        ]);

        //  return dd($hukuman);
    }

    public function hapus($id, Request $request)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('riwayat_indisipliner')->where('id_hukuman', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }
}
