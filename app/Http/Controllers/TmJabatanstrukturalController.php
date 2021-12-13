<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TmJabatanstrukturalController extends Controller
{
    public function index()
    {
        $jbts = \App\Models\Jabatanstruktural::all();
        return view('tm.jabatans', [
            'jbts' => $jbts
        ]);
    }

    public function tambah(Request $request)
    {
        $agm = new \App\Models\Jabatanstruktural;
        $agm->nama_jabatan = $request->nama_jabatan;
        $agm->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/tmjabatans/tambah");
    }


    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tm_jabatanstruktural')->where('kode_jbts', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/tmjabatans/tambah");
    }
}
