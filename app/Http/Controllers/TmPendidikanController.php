<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TmPendidikanController extends Controller
{
    public function index()
    {
        $pdd = \App\Models\Pendidikan::all();
        return view('tm.pendidikan', [
            'pdd' => $pdd
        ]);
    }

    public function tambah(Request $request)
    {
        $agm = new \App\Models\Pendidikan;
        $agm->pendidikan = $request->pendidikan;
        $agm->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/tmpendidikan/tambah");
    }


    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tm_pendidikan')->where('kode_pdd', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/tmpendidikan/tambah");
    }
}
