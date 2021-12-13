<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ListPegawaiController extends Controller
{

    public function beranda()
    {
        $pegawai = \App\Models\ListPegawai::with(['naikkgb', 'naikkgb.gapok'])->orderBy('id_peg', 'DESC')->limit(5)->get();

        $total_pegawai = \App\Models\ListPegawai::all()->count();
        $total_user = \App\Models\User::all()->count();
        $lk = \App\Models\ListPegawai::where('jns_kelamin', 'L')->count();
        $pr = \App\Models\ListPegawai::where('jns_kelamin', 'P')->count();
        return view('pegawai.index', [
            'pegawai' => $pegawai,
            'total_pegawai' => $total_pegawai,
            'total_user' => $total_user,
            'lk' => $lk,
            'pr' => $pr
        ]);
        // return dd($peg);
        // return response()->json(['data' => $pegawai]);
    }

    public function index()
    {
        $pegawai = \App\Models\ListPegawai::all();
        $user = \App\Models\User::all();
        $agama = \App\Models\Agama::all();
        $pendidikan = \App\Models\Pendidikan::all();
        $jbts = \App\Models\jabatanstruktural::all();
        return view('pegawai.list', [
            'pegawai' => $pegawai,
            'user' => $user,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'jbts' => $jbts
        ]);
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'sts_pegawai' => 'required',
            'user' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required',
            'niplama' => 'required', //tab 2
            'agama' => 'required',
            'pendidikan' => 'required',
            'namasekolah' => 'required',
            'sttb' => 'required',
            'gelard' => 'required',
            'gelarb' => 'required',
            'hobi' => 'required', //tab 3
            'tamat' => 'required',
            'tamatjabatan' => 'required',
            'jbts' => 'required',
            'sts_pernikahan' => 'required',

        ]);
        $nip = $request->nip;
        $file = $request->file('foto');
        $tujuan_upload = 'foto'; //nama folder
        $file->move($tujuan_upload, $nip . '.' . $file->getClientOriginalExtension());
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            't_lahir' => $request->t_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'jns_kelamin' => $request->kelamin,
            'sts_pegawai' => $request->sts_pegawai,
            'id_user' => $request->user,
            'foto' => $request->nip . '.' . $file->getClientOriginalExtension(),
            'nip_lama' => $request->niplama,
            'kode_agama' => $request->agama,
            'kode_pdd' => $request->pendidikan,
            'nama_sekolah' => $request->namasekolah,
            'tahun_sttb' => $request->sttb,
            'gelar_depan' => $request->gelard,
            'gelar_belakang' => $request->gelarb,
            'hobi' => $request->hobi,
            'tmt' => $request->tamat,
            'tmt_jab' => $request->tamatjabatan,
            'kode_jbts' => $request->jbts,
            'sts_marital' => $request->sts_pernikahan,

        ]);
        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        // alihkan halaman ke halaman pegawai
        return redirect('/list');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('id_peg', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil Dihapus');
        // alihkan halaman ke halaman pegawai
        return redirect('/list');
    }


    public function edit($id, Request $request)
    {
        $this->validate($request, [
            'foto' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'sts_pegawai' => 'required',
            'user' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required',
            'niplama' => 'required', //tab 2
            'agama' => 'required',
            'pendidikan' => 'required',
            'namasekolah' => 'required',
            'sttb' => 'required',
            'gelard' => 'required',
            'gelarb' => 'required',
            'hobi' => 'required', //tab 3
            'tamat' => 'required',
            'tamatjabatan' => 'required',
            'jbts' => 'required',
            'sts_pernikahan' => 'required',

        ]);

        $nip = $request->nip;
        $file = $request->file('foto');
        $tujuan_upload = 'foto'; //nama folder
        $file->move($tujuan_upload, $nip . '.' . $file->getClientOriginalExtension());

        // insert data ke table pegawai
        DB::table('pegawai')->where('id_peg', $id)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            't_lahir' => $request->t_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telp' => $request->no_telp,
            'jns_kelamin' => $request->kelamin,
            'sts_pegawai' => $request->sts_pegawai,
            'id_user' => $request->user,
            'foto' => $request->nip . '.' . $file->getClientOriginalExtension(),
            'nip_lama' => $request->niplama,
            'kode_agama' => $request->agama,
            'kode_pdd' => $request->pendidikan,
            'nama_sekolah' => $request->namasekolah,
            'tahun_sttb' => $request->sttb,
            'gelar_depan' => $request->gelard,
            'gelar_belakang' => $request->gelarb,
            'hobi' => $request->hobi,
            'tmt' => $request->tamat,
            'tmt_jab' => $request->tamatjabatan,
            'kode_jbts' => $request->jbts,
            'sts_marital' => $request->sts_pernikahan,

        ]);
        Alert::success('Sukses Edit', 'Data berhasil di-Edit');
        // alihkan halaman ke halaman pegawai
        return redirect('/list');
    }

    public function profile($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        $pegawai = \App\Models\ListPegawai::where('id_peg', $id)->with([
            'naikkgb', 'agama',
            'pendidikan', 'suamiistri',
            'anak', 'orangtua',
            'riwayatdiklat', 'riwayatdiklat.diklat',
            'riwayatgapok', 'riwayatgapok.gapok',
            'riwayatindisipliner', 'riwayatjabatan',
            'riwayatjabatan.jabatanstruktural',
            'riwayatjabatanf', 'riwayatjabatanf.jabatanfungsional',
            'riwayatjabatanft', 'riwayatjabatanft.jabatanfungsionalt'
        ])->first();
        $pendidikans = \App\Models\Pendidikan::all();
        $diklat = \App\Models\Diklat::all();
        $edit = \App\Models\RiwayatDiklat::where('id_peg', $id)->orderBy('id_diklat', 'desc')->first();
        $gapok = \App\Models\Gapok::all();
        $jbts = \App\Models\Jabatanstruktural::all();
        $gol = \App\Models\Golongan::all();
        $jbtf = \App\Models\JabatanFungsional::all();
        $jbtft = \App\Models\JabatanFungsionalt::all();
        //  alihkan halaman ke halaman pegawai
        //  return dd($pegawai);
        return view('pegawai.profile', [
            'pegawai' => $pegawai,
            'pendidikans' => $pendidikans,
            'diklat' => $diklat,
            'edit' => $edit,
            'gapok' => $gapok,
            'jbts' => $jbts,
            'gol' => $gol,
            'jbtf' => $jbtf,
            'jbtft' => $jbtft
        ]);
        //return dd($pegawai);
    }
}
