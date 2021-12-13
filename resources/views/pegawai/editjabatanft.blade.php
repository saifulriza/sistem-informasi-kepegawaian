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
        <!-- start tambah jabatan -->
        
        <form action="/pegawai/jabatanfungsionalt/edit/{{$jabatanft->id_jbtft}}" method="post">
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
        <label>Jabatan Fungsional</label>
        <select name="kode_jbtft" class="form-control">
        @foreach($jbtft as $j)
        <option value="{{$j->kode_jbtft}}">{{$j->tugas_tambahan}}</option>
        @endforeach
        </select>
        </div>

        <div class="col-md-6">
        <label>No. SK</label>
        <input type="text" name="no_sk" class="form-control" value="{{$jabatanft->no_sk}}">
        </div>

        </div>

        <div class="row mt-2">
        
        <div class="col-md-6">
        <label>Tanggal SK</label>
        <input type="date" name="tgl_sk" class="form-control" value="{{$jabatanft->tgl_sk}}">
        </div>

        <div class="col-md-6">
        <label>Pejabat Pengesah</label>
        <input type="text" name="pejabat_sk" class="form-control" value="{{$jabatanft->pejabat_sk}}">
        </div>

        </div>

        <div class="row mt-2">
        <div class="col-md-12">
        <label> Terhitung Mulai</label>
        <input type="date" name="tmt" class="form-control" value="{{$jabatanft->tmt}}">
        </div>
        </div>

        <div class="row m-3">
        <input type="submit" value="Edit" class="btn btn-primary">
        </div>
        </form>
        <!-- end tambah jabatan -->
  
  <!-- end card -->
  </div>

  </div>


          @endsection