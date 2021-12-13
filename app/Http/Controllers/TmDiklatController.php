<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TmDiklatController extends Controller
{
    public function index()
    {
        $diklat = \App\Models\Diklat::all();
        return view('tm.diklat', [
            'diklat' => $diklat
        ]);
    }

    public function tambah(Request $request)
    {
        $agm = new \App\Models\Diklat;
        $agm->jenis_diklat = $request->jenis_diklat;
        $agm->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/tmdiklat/tambah");
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tm_diklat')->where('kode_diklat', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/tmdiklat/tambah");
    }
}
