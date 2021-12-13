<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TmJabatanfController extends Controller
{
    public function index()
    {
        $jbtf = \App\Models\JabatanFungsional::all();
        return view('tm.jabatanf', [
            'jbtf' => $jbtf
        ]);
    }

    public function tambah(Request $request)
    {
        $agm = new \App\Models\JabatanFungsional;
        $agm->nama_jabatan = $request->nama_jabatan;
        $agm->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/tmjabatanf/tambah");
    }


    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tm_jabatanf')->where('kode_jbtf', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/tmjabatanf/tambah");
    }
}
