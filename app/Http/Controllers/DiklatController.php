<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DiklatController extends Controller
{
    public function tambah(Request $request)
    {
        $this->validate($request, [

            'nama_diklat' => 'required',
            'tgl_selesai' => 'required',
            'nmr_sertifikat' => 'required',
            'thn_sertifikat' => 'required',
            'penyelenggara' => 'required',
            'jenis_diklat' => 'required',
            'tgl_mulai' => 'required',

        ]);

        // insert data ke table pegawai
        DB::table('riwayat_diklat')->insert([
            'id_peg' => $request->id_peg,
            'nama_diklat' => $request->nama_diklat,
            'tgl_selesai' => $request->tgl_selesai,
            'no_sertifikat' => $request->nmr_sertifikat,
            'thn_sertifikat' => $request->thn_sertifikat,
            'penyelenggara' => $request->penyelenggara,
            'kode_diklat' => $request->jenis_diklat,
            'tgl_mulai' => $request->tgl_mulai,

        ]);
        // alihkan halaman ke halaman pegawai
        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        return redirect("/pegawai/profile/$request->id_peg");
    }


    public function edit($id, Request $request)
    {
        $this->validate($request, [

            'nama_diklat' => 'required',
            'tgl_selesai' => 'required',
            'nmr_sertifikat' => 'required',
            'thn_sertifikat' => 'required',
            'penyelenggara' => 'required',
            'jenis_diklat' => 'required',
            'tgl_mulai' => 'required',

        ]);

        // insert data ke table pegawai
        DB::table('riwayat_diklat')->where('id_diklat', $id)->update([

            'nama_diklat' => $request->nama_diklat,
            'tgl_selesai' => $request->tgl_selesai,
            'no_sertifikat' => $request->nmr_sertifikat,
            'thn_sertifikat' => $request->thn_sertifikat,
            'penyelenggara' => $request->penyelenggara,
            'kode_diklat' => $request->jenis_diklat,
            'tgl_mulai' => $request->tgl_mulai,

        ]);
        // alihkan halaman ke halaman pegawai
        Alert::success('Sukses Edit', 'Data berhasil diedit');
        return redirect("/pegawai/profile/$request->id_peg");
    }


    public function hapus($id, Request $request)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('riwayat_diklat')->where('id_diklat', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil dihapus');

        // alihkan halaman ke halaman pegawai
        return redirect("/pegawai/profile/$request->id_peg");
    }

    public function editpage($id, $id1)
    {
        $diklat = \App\Models\RiwayatDiklat::where('id_diklat', $id)->first();
        $diklat1 = \App\Models\Diklat::all();
        $pegawai = \App\Models\ListPegawai::where('id_peg', $id1)->first();
        return view('pegawai.editdiklat', [
            'diklat' => $diklat,
            'diklat1' => $diklat1,
            'pegawai' => $pegawai
        ]);

        //  return dd($gapok);
    }
}
