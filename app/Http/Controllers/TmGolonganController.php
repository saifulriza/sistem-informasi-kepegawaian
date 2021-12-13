<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TmGolonganController extends Controller
{
    public function index()
    {
        $gol = \App\Models\Golongan::all();
        return view('tm.golongan', [
            'gol' => $gol
        ]);
    }

    public function tambah(Request $request)
    {
        $agm = new \App\Models\Golongan;
        $agm->pangkat = $request->pangkat;
        $agm->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/tmgolongan/tambah");
    }


    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tm_golongan')->where('kode_gol', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/tmgolongan/tambah");
    }
}
