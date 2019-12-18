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
  @if($pegawai->riwayatindisipliner->count() !== 0)
        <!-- start tambah hukuman -->
        
        <form action="/pegawai/hukuman/edit/{{$hukuman->id_hukuman}}" method="post">
        {{ csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
        <div class="row">

        <div class="col-md-6">
        <label>Hukuman</label>
        <input type="text" name="hukuman" value="{{$hukuman->hukuman}}" class="form-control">
        </div>

        <div class="col-md-6">
        <label>No. SK</label>
        <input type="text" name="no_sk" class="form-control" value="{{$hukuman->no_sk}}">
        </div>

        </div>

        <div class="row mt-2">
        
        <div class="col-md-6">
        <label>Tanggal SK</label>
        <input type="date" name="tgl_sk" class="form-control" value="{{$hukuman->tgl_sk}}">
        </div>

        <div class="col-md-6">
        <label>Pejabat Pengesah</label>
        <input type="text" name="pejabat_sk" class="form-control" value="{{$hukuman->pejabat_sk}}">
        </div>

        </div>

        <div class="row mt-2">
        <div class="col-md-12">
        <label>Keterangan</label>
        <input type="text" name="ket" class="form-control" value="{{$hukuman->ket}}">
        </div>
        </div>
        <div class="row m-3">
        <input type="submit" value="Edit" class="btn btn-primary">
        </div>
        </form>
        <!-- end tambah hukuman -->
        @else
        Belum ada data
        @endif
  
  <!-- end card -->
  </div>

  </div>


          @endsection