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
  <!-- card -->

  @if($gapok->count() !== 0)

                <form action="/pegawai/gapok/edit/{{$gapok->id_gapok}}" method="POST">
        {{csrf_field()}}

        <div class="form-row p-2">
        <div class="col-md-12">
        <label>Pemilik Gapok</label>
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
        <input type="text" name="no_sk" value="{{$pegawai->nama}}" class="form-control" disabled>
        </div>
        <!-- form-row -->
        </div>
       
        <div class="form-row p-2">
        <div class="col-md-6">
        <label>No SK</label>
        <input type="text" name="no_sk" value="{{$gapok->no_sk}}" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Tanggal SK</label>
        <input type="date" name="tgl_sk" value="{{$gapok->tgl_sk}}" class="form-control">
        </div>
        <!-- form-row -->
        </div>

        <div class="form-row p-2">
        <div class="col-md-6">
        <label>Pejabat Pengesah</label>
        <input type="text" name="pejabat_sk" value="{{$gapok->pejabat_sk}}" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Gaji Pokok</label>
        <select name="kode_gapok" class="form-control">
        @foreach($gapok1 as $gp)
        <option value="{{$gp->kode_gapok}}">{{$gp->gapok}}</option>
        @endforeach
        </select>
        </div>
        <!-- form-row -->
        </div>

        <div class="form-row p-2">
        <div class="col-md-6">
        <label>Terhitung Mulai</label>
        <input type="date" name="tmt" value="{{$gapok->tmt}}" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Naik Selanjutnya</label>
        <input type="date" name="naik_selanjutnya" value="{{$gapok->naik_selanjutnya}}" class="form-control">
        </div>
        <!-- form-row -->
        </div>

        <div class="row">
        <div class="col-md-12">
        <label>Keterangan</label>
        <input type="text" name="ket" class="form-control" value="{{$gapok->ket}}">
        </div>
        </div>
        
        <div class="form-row m-2">
        <input type="submit" value="Edit" class="btn btn-success">
        </div>
        </form>
        @else
        Belum ada data
        @endif

  <!-- end card -->
  </div>

  </div>


          @endsection