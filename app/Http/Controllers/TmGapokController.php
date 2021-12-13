<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TmGapokController extends Controller
{
    public function index()
    {
        $gapok = \App\Models\Gapok::all();
        return view('tm.gapok', [
            'gapok' => $gapok
        ]);
    }

    public function tambah(Request $request)
    {
        $agm = new \App\Models\Gapok;
        $agm->masa_kerja = $request->masa_kerja;
        $agm->PP = $request->PP;
        $agm->kode_gol = $request->kode_gol;
        $agm->gapok = $request->gapok;
        $agm->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/tmgapok/tambah");
    }


    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tm_gapok')->where('kode_gapok', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/tmgapok/tambah");
    }
}
