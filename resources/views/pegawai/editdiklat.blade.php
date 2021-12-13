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

<!-- start edit diklat -->
@if($diklat1 !== NULL)
<form action="/pegawai/diklat/edit/{{$diklat->id_diklat}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
    <div class="row">
<div class="col-md-12">
<label>Pemilik Diklat</label>
<input type="text" value="{{$pegawai->nama}}" class="form-control" disabled>
<!-- form group -->
</div>
</div>
<div class="form-row mt-2">
<div class="col-md-6">
<label>Nama Diklat</label>
<input type="text" name="nama_diklat" value="{{$diklat->nama_diklat}}" class="form-control">
<!-- form group -->
</div>


    <div class="col-md-6">
    <label>Jenis Diklat</label>
    <select name="jenis_diklat" class="form-control" >
        @foreach($diklat1 as $dikl2)
        <option value="{{$dikl2->kode_diklat}}" @if($dikl2->kode_diklat == $diklat->kode_diklat) selected @endif>{{$dikl2->jenis_diklat}}</option>
        @endforeach
    </select>
    <!-- form group -->
    </div>

    <!-- form row -->
</div> 


<div class="form-row mt-2">
        <div class="form-group col-md-6">
        <label>Tanggal Mulai</label>
        <input type="date" name="tgl_mulai" value="{{$diklat->tgl_mulai}}" class="form-control">
        <!-- form group -->
        </div>

        <div class="form-group col-md-6">
                <label>Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" value="{{$diklat->tgl_selesai}}"class="form-control">
                <!-- form group -->
                </div>
    <!-- form row -->
</div> 

<div class="form-row">
        <div class="form-group col-md-6">
        <label>Nomor Sertifikat</label>
        <input type="text" name="nmr_sertifikat" value="{{$diklat->no_sertifikat}}" class="form-control">
        <!-- form group -->
        </div>

        <div class="form-group col-md-6">
                <label>Tahun Sertifikat</label>
                <input type="number" name="thn_sertifikat" value="{{$diklat->thn_sertifikat}}" class="form-control">
                <!-- form group -->
                </div>
    <!-- form row -->
</div> 

<div class="form-row">
        <div class="form-group col-md-12">
        <label>Penyelenggara</label>
        <input type="text" name="penyelenggara" value="{{$diklat->penyelenggara}}" class="form-control">
        <!-- form group -->
        </div>
    <!-- form row -->
</div> 

<div class="form-row">
<button type="sumbit" name="submit" class="btn btn-primary">Edit</button>
</div>
</form>
@else
Belum ada data diklat.
@endif
<!-- end edit diklat -->

<!-- end card -->
</div>

</div>


        @endsection