<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class JabatanftController extends Controller
{
    public function tambah(Request $request)
    {
        $jabatanft = new \App\Models\Riwayatjabatanft;
        $jabatanft->id_peg = $request->id_peg;
        $jabatanft->tugas_tambahan = $request->tugas_tambahan;
        $jabatanft->jabatan = $request->jabatan;
        $jabatanft->level = $request->level;
        $jabatanft->ket = $request->ket;
        $jabatanft->save();

        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/profile/$request->id_peg");
    }
}
