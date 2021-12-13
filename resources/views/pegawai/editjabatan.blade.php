@extends('layouts.induk')
@section('konten')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
    @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
	@endif
    </div>
  </div>

  <div class="card p-3">
  @if($pegawai->riwayatjabatan->count() !== 0)
        <!-- start tambah jabatan -->
        
        <form action="/pegawai/jabatan/edit/{{$jabatan->id_jabatan}}" method="post">
        {{ csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
        <div class="row">

  <div class="col-md-12">
  <label>Pemilik Jabatan</label>
  <input type="text" class="form-control" value="{{$pegawai->nama}}" disabled>
  </div>
  </div>
        <div class="row mt-2">

        <div class="col-md-6">
        <label>Jabatan</label>
        <select name="kode_jbts" class="form-control">
        @foreach($jbts as $j)
        <option value="{{$j->kode_jbts}}">{{$j->nama_jabatan}}</option>
        @endforeach
        </select>
        </div>

        <div class="col-md-6">
        <label>No. SK</label>
        <input type="text" name="no_sk" class="form-control" value="{{$jabatan->no_sk}}">
        </div>

        </div>

        <div class="row mt-2">
        
        <div class="col-md-6">
        <label>Tanggal SK</label>
        <input type="date" name="tgl_sk" class="form-control" value="{{$jabatan->tgl_sk}}">
        </div>

        <div class="col-md-6">
        <label>Pejabat Pengesah</label>
        <input type="text" name="pejabat_sk" class="form-control" value="{{$jabatan->pejabat_sk}}">
        </div>

        </div>

        <div class="row mt-2">
        <div class="col-md-12">
        <label> Terhitung Mulai</label>
        <input type="date" name="tmt" class="form-control" value="{{$jabatan->tmt}}">
        </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-6">
        <label>Golongan</label>
        <select name="kode_gol" class="form-control">
        @foreach($gol as $g)
        <option value="{{$g->kode_gol}}">{{$g->pangkat}}</option>
        @endforeach
        </select>

        </div>
        <div class="col-md-6">
        <label>Keterangan</label>
        <input type="text" name="ket" class="form-control" value="{{$jabatan->ket}}">
        </div>
        </div>
        <div class="row m-3">
        <input type="submit" value="Edit" class="btn btn-primary">
        </div>
        </form>
        <!-- end tambah jabatan -->
        @else
        Belum ada data
        @endif
  
  <!-- end card -->
  </div>

  </div>


          @endsection