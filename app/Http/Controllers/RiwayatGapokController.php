<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RiwayatGapokController extends Controller
{
    public function tambah(Request $request)
    {
        $gapok = new \App\Models\RiwayatGapok;
        $gapok->id_peg = $request->id_peg;
        $gapok->no_sk = $request->no_sk;
        $gapok->tgl_sk = $request->tgl_sk;
        $gapok->pejabat_sk = $request->pejabat_sk;
        $gapok->kode_gapok = $request->kode_gapok;
        $gapok->naik_selanjutnya = $request->naik_selanjutnya;
        $gapok->ket = $request->ket;
        $gapok->tmt = $request->tmt;
        $gapok->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/profile/$request->id_peg");
    }

    public function edit($id, Request $request)
    {
        DB::table('riwayat_gapok')->where('id_gapok', $id)->update([
            'id_peg' => $request->id_peg,
            'no_sk' => $request->no_sk,
            'tgl_sk' => $request->tgl_sk,
            'pejabat_sk' => $request->pejabat_sk,
            'kode_gapok' => $request->kode_gapok,
            'naik_selanjutnya' => $request->naik_selanjutnya,
            'tmt' => $request->tmt,
            'ket' => $request->ket
        ]);
        Alert::success('Sukses Edit', 'Data berhasil di-Edit');
        return redirect("/pegawai/profile/$request->id_peg");
    }

    public function editpage($id, $id1)
    {
        $gapok = \App\Models\RiwayatGapok::where('id_gapok', $id)->first();
        $gapok1 = \App\Models\Gapok::all();
        $pegawai = \App\Models\ListPegawai::where('id_peg', $id1)->first();
        return view('pegawai.editgapok', [
            'gapok' => $gapok,
            'gapok1' => $gapok1,
            'pegawai' => $pegawai
        ]);

        //  return dd($gapok);
    }


    public function hapus($id, Request $request)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('riwayat_gapok')->where('id_gapok', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }
}
