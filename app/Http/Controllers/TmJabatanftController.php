<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TmJabatanftController extends Controller
{
    public function index()
    {
        $jbtft = \App\Models\JabatanFungsionalt::all();
        return view('tm.jabatanft', [
            'jbtft' => $jbtft
        ]);
    }

    public function tambah(Request $request)
    {
        $agm = new \App\Models\JabatanFungsionalt;
        $agm->tugas_tambahan = $request->tugas_tambahan;
        $agm->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/tmjabatanft/tambah");
    }


    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tm_jabatanft')->where('kode_jbtft', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/tmjabatanft/tambah");
    }
}
