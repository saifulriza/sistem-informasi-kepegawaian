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
  @if ($message = Session::get('alert-success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif
<div class="row">
<div class="col-md-3">
<div class="card shadow mb-4 align-middle">
    <div class="card-body">
    <img src="../../foto/{{$pegawai->foto}}" width="180px" />
    </div>
    </div>
    </div>

    <div class="col-md-3">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary text-center">{{$pegawai->nama}}</h6>
  </div>
    <div class="card-body">
<i class="fa fa-address-card"></i> {{$pegawai->nip}} <hr>
<i class="fa fa-phone"></i> {{$pegawai->no_telp}}<hr>
<i class="fa fa-envelope"></i> {{$pegawai->sts_pegawai}}
    </div>
    </div>
    </div>

    <div class="col-md-6">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary text-center">Riwayat</h6>
  </div>
    <div class="card-body">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalDiklat">Diklat</button>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalGapok">Gapok</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalHukuman">Hukuman</button><hr>
<!-- row 2 -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalJabatan">Jabatan</button>
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalJabatanfungsional">Jabatan Fungsional</button>
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalJabatanfungsionaltambahan">Jabatan Tambahan</button>
    </div>
    </div>
    </div>

<!-- row -->
    </div>


    <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Suami Istri</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Anak</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ortu</a>
    
    </div>
  </div>

  
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
  
      <div class="col-md-10">
     <div class="card shadow mb-4 pl-5 pt-5 pr-5">

     <!-- row 1 -->
     <div class="row">
     <div class="col-md-4"> NIP
     </div>
     <div class="col-md-8"> : {{$pegawai->nip}}
     </div>
     </div>
     <hr>

     <!-- row 2 -->

     <div class="row">
     <div class="col-md-4"> Nama
     </div>
     <div class="col-md-8"> : {{$pegawai->nama}}
     </div>
     </div>
     <hr>

          <!-- row 3 -->

      <div class="row">
     <div class="col-md-4"> Tempat, Tanggal Lahir
     </div>
     <div class="col-md-8"> : {{$pegawai->t_lahir}}, {{$pegawai->tgl_lahir}}
     </div>
     </div>
     <hr>

          <!-- row 4 -->

          <div class="row">
     <div class="col-md-4"> Agama
     </div>
     <div class="col-md-8"> : {{$pegawai->agama->agama}}
     </div>
     </div>
     <hr>

          <!-- row 5 -->

          <div class="row">
     <div class="col-md-4"> Jenis Kelamin
     </div>
     <div class="col-md-8"> : @if($pegawai->jns_kelamin == 'L') Laki-laki @else Perempuan @endif
     </div>
     </div>
     <hr>

          <!-- row 6 -->

          <div class="row">
     <div class="col-md-4"> Hobi
     </div>
     <div class="col-md-8"> : {{$pegawai->hobi}}
     </div>
     </div>
     <hr>

          <!-- row 7 -->

          <div class="row">
     <div class="col-md-4"> Status Pernikahan
     </div>
     <div class="col-md-8"> : {{$pegawai->sts_marital}}
     </div>
     </div>
     <hr>

          <!-- row 8 -->

          <div class="row">
     <div class="col-md-4"> Status Kepegawaian
     </div>
     <div class="col-md-8"> : {{$pegawai->sts_pegawai}}
     </div>
     </div>
     <hr>

          <!-- row 9 -->

          <div class="row">
     <div class="col-md-4"> Pendidikan
     </div>
     <div class="col-md-8"> : @foreach($pegawai->pendidikan as $pp) <span class="badge badge-primary">{{$pp->pendidikan}}</span> @endforeach
     </div>
     </div>
     <hr>

          <!-- row 10 -->

          <div class="row">
     <div class="col-md-4"> No. Telp
     </div>
     <div class="col-md-8"> : {{$pegawai->no_telp}}
     </div>
     </div>
     <hr>

          

     <!-- card shadow -->
     </div>
     <!-- col -->
     </div>

      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      
      <div class="col-md-10">
     <div class="card shadow mb-4 p-3">
     @if($pegawai->suamiistri->count() !== 0)
     <!-- row 2 -->

     <div class="row">
     <div class="col-md-4"> Nama
     </div>
     <div class="col-md-8"> :  @foreach($pegawai->suamiistri as $psi) <span class="badge badge-primary">{{$psi->nama_istri_suami}}</span> @endforeach
     </div>
     </div>
     <hr>

          <!-- row 3 -->

      <div class="row">
     <div class="col-md-4"> Tempat Lahir
     </div>
     <div class="col-md-8"> : @foreach($pegawai->suamiistri as $psi) <span class="badge badge-primary">{{$psi->t_lahir}} </span> @endforeach
     </div>
     </div>
     <hr>

     <div class="row">
     <div class="col-md-4"> Tanggal Lahir
     </div>
     <div class="col-md-8"> : @foreach($pegawai->suamiistri as $psi) <span class="badge badge-primary">{{$psi->tgl_lahir}} </span> @endforeach
     </div>
     </div>
     <hr>

          <!-- row 4 -->

          <div class="row">
     <div class="col-md-4"> Jenis Kelamin
     </div>
     <div class="col-md-8"> : @foreach($pegawai->suamiistri as $psi) <span class="badge badge-primary">@if($psi->jns_kelamin == 'L') Laki-laki @else Perempuan @endif</span> @endforeach
     </div>
     </div>
     <hr>

          <!-- row 5 -->

          <div class="row">
     <div class="col-md-4"> Pendidikan
     </div>
     <div class="col-md-8"> : @foreach($pegawai->suamiistri as $psi) @foreach($psi->pendidikan as $pendidikan)<span class="badge badge-primary">{{$pendidikan->pendidikan}}</span> @endforeach @endforeach
     </div>
     </div>
     <hr>

          <!-- row 6 -->

          <div class="row">
     <div class="col-md-4"> Status Tunjangan
     </div>
     <div class="col-md-8"> : @foreach($pegawai->suamiistri as $psi) <span class="badge badge-primary">{{$psi->sts_tunjangan}}<span> @endforeach
     </div>
     </div>
     <hr>

          <!-- row 7 -->

          <div class="row">
     <div class="col-md-4"> Tanggal Pernikahan
     </div>
     <div class="col-md-8"> : @foreach($pegawai->suamiistri as $psi) <span class="badge badge-primary">{{$psi->tgl_menikah}}</span> @endforeach
     </div>
     </div>
     <hr>

          <!-- row 8 -->

          <div class="row">
     <div class="col-md-4"> Keterangan
     </div>
     <div class="col-md-8"> : @foreach($pegawai->suamiistri as $psi) <span class="badge badge-primary">{{$psi->ket}}</span> @endforeach
     </div>
     </div>
     <hr>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSuami"><i class="fa fa-plus"></i></button>
     @else
     Belum ada data Suami istri . <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSuami"><i class="fa fa-plus"></i></button>

     @endif
 
     <!-- card shadow -->
     </div>
     <!-- col -->
     </div>

      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
<div class="col-md-10">
<div class="card shadow mb-4 p-3">
@if($pegawai->anak->count() !== 0)
       <!-- row 2 -->
  
       <div class="row">
       <div class="col-md-4"> Nama
       </div>
       <div class="col-md-8"> : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->nama_anak}}</span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 3 -->
  
        <div class="row">
       <div class="col-md-4"> Tempat, Tanggal Lahir
       </div>
       <div class="col-md-8"> : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->t_lahir}}</span> @endforeach , @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->tgl_lair}}</span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 4 -->
  
            <div class="row">
       <div class="col-md-4"> Jenis Kelamin
       </div>
       <div class="col-md-8"> : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->jns_kelamin}} <span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 5 -->
  
            <div class="row">
       <div class="col-md-4"> Pendidikan
       </div>
       <div class="col-md-8"> : @foreach($pegawai->anak as $anak) @foreach($anak->pendidikan as $pdd)<span class="badge badge-primary">{{$pdd->pendidikan}}</span> @endforeach @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 6 -->
  
            <div class="row">
       <div class="col-md-4"> Status Tunjangan
       </div>
       <div class="col-md-8"> : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->sts_tunjangan}}</span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 7 -->
  
            <div class="row">
       <div class="col-md-4"> Status Pernikahan
       </div>
       <div class="col-md-8"> : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->sts_menikah}}</span> @endforeach
       </div>
       </div>
       <hr>
  
            <!-- row 8 -->
  
            <div class="row">
       <div class="col-md-4"> Keterangan
       </div>
       <div class="col-md-8"> : @foreach($pegawai->anak as $anak) <span class="badge badge-primary">{{$anak->ket}}</span> @endforeach
       </div>
       </div>
       <hr>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAnak"><i class="fa fa-plus"></i></button>
  @else
  Belum ada data anak. <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAnak"><i class="fa fa-plus"></i></button>
  
  @endif
   
       <!-- card shadow -->
       </div>
       <!-- col -->
       </div>
        </div>


      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      
      <div class="col-md-10">
     <div class="card shadow mb-4 p-3">
     @if($pegawai->orangtua->count() !== 0)

     <!-- row 2 -->

     <div class="row">
     <div class="col-md-4"> Nama
     </div>
     <div class="col-md-8"> : @foreach($pegawai->orangtua as $org) {{$org->nama_ortu}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 3 -->

      <div class="row">
     <div class="col-md-4"> Tempat, Tanggal Lahir
     </div>
     <div class="col-md-8"> :  @foreach($pegawai->orangtua as $org) {{$org->t_lahir}} @endforeach,  @foreach($pegawai->orangtua as $org) {{$org->tgl_lahir}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 4 -->

          <div class="row">
     <div class="col-md-4"> Status
     </div>
     <div class="col-md-8"> : @foreach($pegawai->orangtua as $org) {{$org->jns_kelamin}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 5 -->

          <div class="row">
     <div class="col-md-4"> Alamat
     </div>
     <div class="col-md-8"> :  @foreach($pegawai->orangtua as $org) {{$org->alamat}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 6 -->

          <div class="row">
     <div class="col-md-4"> Pekerjaan
     </div>
     <div class="col-md-8"> :  @foreach($pegawai->orangtua as $org) {{$org->pekerjaan}} @endforeach
     </div>
     </div>
     <hr>

          <!-- row 7 -->

          <div class="row">
     <div class="col-md-4"> Keterangan
     </div>
     <div class="col-md-8"> :  @foreach($pegawai->orangtua as $org) {{$org->ket}} @endforeach
     </div>
     </div>
     <hr>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalOrtu"><i class="fa fa-plus"></i></button>
@else
Belum ada data orangtua. <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalOrtu"><i class="fa fa-plus"></i></button>

@endif
     <!-- card shadow -->
     </div>
     <!-- col -->
     </div>

</div>
</div>
</div>
</div>
</div>


<!-- Modal Suami istri -->
<div class="modal fade" id="ModalSuami" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Suami Istri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/pegawai/suamiistri/tambah/proses" method="post">
        {{csrf_field()}}
        <div class="form-row">
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
<div class="form-group col-md-4">
<label for="inputKarpeg">Nama</label>
<input type="text" name="nama" id="inputKarpeg" class="form-control" required>
</div>
<div class="form-group col-md-4">
  <label for="inputTtl">Tempat</label>
  <input type="text" name="t_lahir" class="form-control">
  </div>
  <div class="form-group col-md-4">
  <label for="inputTgl">Tgl Lahir</label>
  <input type="date" name="tgl_lahir" class="form-control">
  </div>
  <div class="form-group col-md-4">
  <label for="inputStatus">Jenis Kelamin</label>
  <select name="kelamin" id="inputUser" class="form-control" required>
  <option>---</option>

  <option value="L">Laki-laki</option>
  <option value="P">Perempuan</option>

  </select>
  </div>
  <div class="form-group col-md-4">
  <label for="inputStatus">Pendidikan</label>
  <select name="pendidikan" id="inputUser" class="form-control" required>
  <option>---</option>
@foreach($pendidikans as $pdds)
  <option value="{{$pdds->kode_pdd}}">{{$pdds->pendidikan}}</option>
@endforeach
  </select>
  </div>
<div class="form-group col-md-4">
  <label for="inputStatus">Tanggal Pernikahan</label>
<input type="date" name="tgl_menikah" class="form-control">
  </div>
  <div class="form-group col-md-6">
  <label for="inputStatus">Status Tunjangan</label>
  <select name="sts_tunjangan" id="inputUser" class="form-control" required>
  <option>---</option>
  <option value="Ya">Iya</option>
  <option value="Tidak">Tidak</option>
  </select>
  </div>
  <div class="form-group col-md-6">
  <label for="inputStatus">Keterangan</label>
  <input type="text" class="form-control" name="keterangan">
  </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button></form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Modal suami istri -->

<!-- Modal Anak -->
<div class="modal fade" id="ModalAnak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Anak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pegawai/anak/tambah/proses" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
        <div class="form-row">
<div class="form-group col-md-4">
<label for="inputKarpeg">Nama</label>
<input type="text" name="nama" id="inputKarpeg" class="form-control" required>
</div>
<div class="form-group col-md-4">
  <label for="inputTtl">Tempat</label>
  <input type="text" name="t_lahir" class="form-control">
  </div>
  <div class="form-group col-md-4">
  <label for="inputTgl">Tgl Lahir</label>
  <input type="date" name="tgl_lahir" class="form-control">
  </div>
  <div class="form-group col-md-4">
  <label for="inputStatus">Jenis Kelamin</label>
  <select name="kelamin" id="inputUser" class="form-control" required>
  <option>---</option>

  <option value="L">Laki-laki</option>
  <option value="P">Perempuan</option>

  </select>
  </div>
  <div class="form-group col-md-4">
  <label for="inputStatus">Pendidikan</label>
  <select name="pendidikan" id="inputUser" class="form-control" required>
  <option>---</option>
  @foreach($pendidikans as $pdds)
  <option value="{{$pdds->kode_pdd}}">{{$pdds->pendidikan}}</option>
@endforeach
  </select>
  </div>
<div class="form-group col-md-4">
  <label for="inputStatus">Status Pernikahan</label>
  <select name="sts_pernikahan" id="inputUser" class="form-control" required>
  <option>---</option>
  <option value="Menikah">Menikah</option>
  <option value="Belum menikah">Belum menikah</option>
  </select>
  </div>
  <div class="form-group col-md-6">
  <label for="inputStatus">Status Tunjangan</label>
  <select name="sts_tunjangan" id="inputUser" class="form-control" required>
  <option>---</option>
  <option value="Iya">Iya</option>
  <option value="Tidak">Tidak</option>
  </select>
  </div>
  <div class="form-group col-md-6">
  <label for="inputStatus">Keterangan</label>
  <input type="text" class="form-control" name="keterangan">
  </div>
</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button></form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Anak -->


<!-- Modal Ortu -->
<div class="modal fade" id="ModalOrtu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Ortu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/pegawai/orangtua/tambah/proses" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
        <div class="form-row">
<div class="form-group col-md-4">
<label for="inputKarpeg">Nama</label>
<input type="text" name="nama" id="inputKarpeg" class="form-control" required>
</div>
<div class="form-group col-md-4">
  <label for="inputTtl">Tempat</label>
  <input type="text" name="t_lahir" class="form-control">
  </div>
  <div class="form-group col-md-4">
  <label for="inputTgl">Tgl Lahir</label>
  <input type="date" name="tgl_lahir" class="form-control">
  </div>
  <div class="form-group col-md-6">
  <label for="inputStatus">Jenis Kelamin</label>
  <select name="kelamin" id="inputUser" class="form-control" required>
  <option>---</option>

  <option value="L">Laki-laki</option>
  <option value="P">Perempuan</option>

  </select>
  </div>
 
  <div class="form-group col-md-6">
  <label for="inputStatus">Alamat</label>
  <input type="text" class="form-control" name="alamat">
  </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputStatus">Pekerjaan</label>
  <input type="text" class="form-control" name="pekerjaan">
</div>
<div class="form-group col-md-6">
<label for="inputStatus">Keterangan</label>
  <input type="text" class="form-control" name="keterangan">
</div>
</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button></form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal ortu -->

<!-- Modal diklat -->
<div class="modal fade" id="ModalDiklat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Diklat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-tambah-tab" data-toggle="pill" href="#pills-tambah" role="tab" aria-controls="pills-tambah" aria-selected="true">Tambah</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Hapus</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <!-- Data home  diklat-->
  <div class="card p-3">
  @if($pegawai->riwayatdiklat->count() !== 0)
  <div class="row">
  <div class="col-md-6">
  Nama Diklat
  </div>
  <div class="col-md-6">
  : @foreach($pegawai->riwayatdiklat as $rd) <span class="badge badge-primary">{{$rd->nama_diklat}}</span>  @endforeach
  </div>
  </div>
  <hr>

  <div class="row">
  <div class="col-md-6">
  Jenis Diklat
  </div>
  <div class="col-md-6">
  : @foreach($pegawai->riwayatdiklat as $rd)  <span class="badge badge-success">{{$rd->diklat->jenis_diklat}}</span>  @endforeach
  </div>
  </div>
  <hr>

  <div class="row">
  <div class="col-md-6">
  Tanggal Mulai
  </div>
  <div class="col-md-6">
  : @foreach($pegawai->riwayatdiklat as $rd) <span class="badge badge-secondary">{{$rd->tgl_mulai}}</span>  @endforeach
  </div>
  </div>
  <hr>

  <div class="row">
  <div class="col-md-6">
  Tanggal Selesai
  </div>
  <div class="col-md-6">
  : @foreach($pegawai->riwayatdiklat as $rd) <span class="badge badge-warning">{{$rd->tgl_selesai}}</span>  @endforeach
  </div>
  </div>
  <hr>

  <div class="row">
  <div class="col-md-6">
  Nomor Sertifikat
  </div>
  <div class="col-md-6">
  : @foreach($pegawai->riwayatdiklat as $rd) <span class="badge badge-danger">{{$rd->no_sertifikat}}</span>  @endforeach
  </div>
  </div>
  <hr>

  <div class="row">
  <div class="col-md-6">
  Tahun Sertifikat
  </div>
  <div class="col-md-6">
  : @foreach($pegawai->riwayatdiklat as $rd) <span class="badge badge-dark">{{$rd->thn_sertifikat}}</span>  @endforeach
  </div>
  </div>
  <hr>

  <div class="row">
  <div class="col-md-6">
  Penyelenggara
  </div>
  <div class="col-md-6">
  : @foreach($pegawai->riwayatdiklat as $rd) <span class="badge badge-info">{{$rd->penyelenggara}}</span>  @endforeach
  </div>
  </div><hr>

  <div class="row">
  <div class="col-md-6">
  Aksi
  </div>
  <div class="col-md-6">
  : @foreach($pegawai->riwayatdiklat as $rd) <a class="btn btn-primary btn-sm" href="/pegawai/riwayatdiklat/editpage/{{$rd->id_diklat}}/{{$pegawai->id_peg}}">Edit</a>  @endforeach
  </div>
  </div>
  @else
  Belum ada data riwayat diklat
  @endif
  </div>
  <!-- end data home diklat -->
  </div>
  <div class="tab-pane fade" id="pills-tambah" role="tabpanel" aria-labelledby="pills-tambah-tab">
    <!-- Start tambah data diklat -->
    <form action="/pegawai/diklat/tambah" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
    <div class="form-row">
<div class="form-group col-md-6">
<label>Nama Diklat</label>
<input type="text" name="nama_diklat" class="form-control" required>
<!-- form group -->
</div>

    <div class="form-group col-md-6">
    <label>Jenis Diklat</label>
    <select name="jenis_diklat" class="form-control" required>
        @foreach($diklat as $dikl)
        <option value="{{$dikl->kode_diklat}}">{{$dikl->jenis_diklat}}</option>
        @endforeach
    </select>
    <!-- form group -->
    </div>

    <!-- form row -->
</div> 


<div class="form-row">
        <div class="form-group col-md-6">
        <label>Tanggal Mulai</label>
        <input type="date" name="tgl_mulai" class="form-control" required>
        <!-- form group -->
        </div>

        <div class="form-group col-md-6">
                <label>Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" class="form-control" required>
                <!-- form group -->
                </div>
    <!-- form row -->
</div> 

<div class="form-row">
        <div class="form-group col-md-6">
        <label>Nomor Sertifikat</label>
        <input type="text" name="nmr_sertifikat" class="form-control" required>
        <!-- form group -->
        </div>

        <div class="form-group col-md-6">
                <label>Tahun Sertifikat</label>
                <input type="number" name="thn_sertifikat" class="form-control" required>
                <!-- form group -->
                </div>
    <!-- form row -->
</div> 

<div class="form-row">
        <div class="form-group col-md-12">
        <label>Penyelenggara</label>
        <input type="text" name="penyelenggara" class="form-control" required>
        <!-- form group -->
        </div>
    <!-- form row -->
</div> 

<!-- button tambah -->
<div class="form-row">
<button type="sumbit" name="submit" class="btn btn-primary">Tambah</button>
</div>
<!-- button tambah end -->
</form>
    <!-- end tambah data diklat -->
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    @if($edit !== NULL)
<!-- start hapus diklat -->
@foreach($pegawai->riwayatdiklat as $rd)
  <form action="/pegawai/diklat/hapus/{{$rd->id_diklat}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
<button type="submit" class="btn btn-danger btn-sm m-2">Hapus {{$rd->nama_diklat}}</button>
</form>
@endforeach
<!-- end hapus diklat -->
@else
Belum ada data diklat
@endif
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal diklat -->

<!-- start modal gapok -->
<div class="modal fade" id="ModalGapok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Gapok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tambah</a>
          <a class="nav-item nav-link" id="nav-hapus-tab" data-toggle="tab" href="#nav-hapus" role="tab" aria-controls="nav-hapus" aria-selected="false">Hapus</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <!-- Start home gapok -->
        <div class="card p-3">
        @if($pegawai->riwayatgapok->count() !== 0)
        <div class="row">
<div class="col-md-5">
Nomor SK
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatgapok as $rg) <span class="badge badge-primary">{{$rg->no_sk}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Tanggal SK
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatgapok as $rg)<span class="badge badge-primary"> {{$rg->tgl_sk}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Surat Keputusan Pejabat
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatgapok as $rg) <span class="badge badge-primary">{{$rg->pejabat_sk}} </span>  @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Terhitung Mulai Tanggal
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatgapok as $rg) <span class="badge badge-primary">{{$rg->tmt}} </span>  @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Keterangan
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatgapok as $rg) <span class="badge badge-primary">{{$rg->ket}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Aksi
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatgapok as $rg) <a class="btn btn-primary btn-sm" href="/pegawai/gapok/editpage/{{$rg->id_gapok}}/{{$pegawai->id_peg}}"> Edit </a> @endforeach
</div>
</div><hr>
@else
Belum ada data Gapok
@endif
        </div>
        <!-- End home gapok -->
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">  
        <div class="card p-3">
        <!-- card -->
        <form action="/pegawai/gapok/tambah" method="POST">
        {{csrf_field()}}

        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
       
        <div class="form-row p-2">
        <div class="col-md-6">
        <label>No SK</label>
        <input type="text" name="no_sk" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Tanggal SK</label>
        <input type="date" name="tgl_sk" class="form-control">
        </div>
        <!-- form-row -->
        </div>

        <div class="form-row p-2">
        <div class="col-md-6">
        <label>Pejabat Pengesah</label>
        <input type="text" name="pejabat_sk" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Gaji Pokok</label>
        <select name="kode_gapok" class="form-control">
        @foreach($gapok as $gp)
        <option value="{{$gp->kode_gapok}}">{{$gp->gapok}}</option>
        @endforeach
        </select>
        </div>
        <!-- form-row -->
        </div>

        <div class="form-row p-2">
        <div class="col-md-6">
        <label>Terhitung Mulai</label>
        <input type="date" name="tmt" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Naik Selanjutnya</label>
        <input type="date" name="naik_selanjutnya" class="form-control">
        </div>
        <!-- form-row -->
        </div>

        <div class="row">
        <div class="col-md-12">
        <label>Keterangan</label>
        <input type="text" name="ket" class="form-control">
        </div>
        </div>
        <div class="form-row m-2">
        <input type="submit" value="Tambah" class="btn btn-success">
        </div>
        </form>
        <!-- end card -->
        </div>

        </div>
      
        <div class="tab-pane fade" id="nav-hapus" role="tabpanel" aria-labelledby="nav-hapus-tab">
  @if($pegawai->riwayatgapok->count() !== 0)
<!-- start hapus diklat -->
@foreach($pegawai->riwayatgapok as $rg)
  <form action="/pegawai/gapok/hapus/{{$rg->id_gapok}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
<button type="submit" class="btn btn-danger m-2">Hapus gapok dgn SK {{$rg->no_sk}}</button>
</form>
@endforeach
<!-- end hapus diklat -->
@else
Belum ada gapok
@endif
  </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal gapok -->


<!-- start modal hukuman -->
<div class="modal fade" id="ModalHukuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Hukuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home1" aria-selected="true">Home</a>
        <a class="nav-item nav-link" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile1" aria-selected="false">Tambah</a>
        <a class="nav-item nav-link" id="nav-hapus-tab1" data-toggle="tab" href="#nav-hapus1" role="tab" aria-controls="nav-hapus1" aria-selected="false">Hapus</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab1">
<!-- start home hukuman -->
<div class="card p-3">
@if($pegawai->riwayatindisipliner->count() !== 0)
<div class="row">
<div class="col-md-5">
Hukuman
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatindisipliner as $rid) <span class="badge badge-primary">{{$rid->hukuman}}</span>@endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
No SK
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatindisipliner as $rid) <span class="badge badge-primary">{{$rid->no_sk}}</span>@endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Tanggal SK
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatindisipliner as $rid) <span class="badge badge-primary">{{$rid->tgl_sk}}</span>@endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Pejabat Pengesah
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatindisipliner as $rid) <span class="badge badge-primary">{{$rid->pejabat_sk}}</span>@endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Aksi
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatindisipliner as $rid) <a class="btn btn-primary btn-sm" href="/pegawai/hukuman/editpage/{{$rid->id_hukuman}}/{{$pegawai->id_peg}}">Edit</a>@endforeach
</div>
</div>
@else
Data belum ada
@endif
</div>
<!-- end home hukuman -->
      </div>
      <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab1">

        <div class="card p-3">
        <!-- start tambah hukuman -->
        
        <form action="/pegawai/hukuman/tambah" method="post">
        {{ csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
        <div class="row">

        <div class="col-md-6">
        <label>Hukuman</label>
        <input type="text" name="hukuman" class="form-control">
        </div>

        <div class="col-md-6">
        <label>No. SK</label>
        <input type="text" name="no_sk" class="form-control">
        </div>

        </div>

        <div class="row">
        
        <div class="col-md-6">
        <label>Tanggal SK</label>
        <input type="date" name="tgl_sk" class="form-control">
        </div>

        <div class="col-md-6">
        <label>Pejabat Pengesah</label>
        <input type="text" name="pejabat_sk" class="form-control">
        </div>

        </div>

        <div class="row">
        <div class="col-md-12">
        <label>Keterangan</label>
        <input type="text" name="ket" class="form-control">
        </div>
        </div>
        <div class="row m-3">
        <input type="submit" value="Tambah" class="btn btn-primary">
        </div>
        </form>
        <!-- end tambah hukuman -->
        </div>
        </div>
      <div class="tab-pane fade" id="nav-hapus1" role="tabpanel" aria-labelledby="nav-hapus-tab1">
    @if($pegawai->riwayatindisipliner->count() !== 0)
<!-- start hapus diklat -->
@foreach($pegawai->riwayatindisipliner as $rid)
  <form action="/pegawai/hukuman/hapus/{{$rid->id_hukuman}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">
<button type="submit" class="btn btn-danger btn-sm m-2">Hapus {{$rid->hukuman}}</button>
</form>
@endforeach
<!-- end hapus diklat -->
@else
Belum ada data hukuman
@endif
  </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal hukuman -->


<!-- start modal jabatan -->
<div class="modal fade" id="ModalJabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#nav-home2" role="tab" aria-controls="nav-home2" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile2" aria-selected="false">Tambah</a>
    <a class="nav-item nav-link" id="nav-hapus-tab2" data-toggle="tab" href="#nav-hapus2" role="tab" aria-controls="nav-hapus2" aria-selected="false">Hapus</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab2">
  <!-- start home jabatan -->
  <div class="card p-3">
  @if($pegawai->riwayatjabatan->count() !== 0)
<div class="row">
<div class="col-md-5">
Nama Jabatan
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt)<span class="badge badge-primary"> {{$rjbt->jabatanstruktural->nama_jabatan}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Level
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt)<span class="badge badge-primary"> {{$rjbt->jabatanstruktural->level}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Eselon
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt)<span class="badge badge-primary"> {{$rjbt->jabatanstruktural->eselon}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
No SK
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt)<span class="badge badge-primary"> {{$rjbt->no_sk}}</span>  @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Tanggal SK
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt)<span class="badge badge-primary"> {{$rjbt->tgl_sk}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Pejabat Pengesah
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt) <span class="badge badge-primary">{{$rjbt->pejabat_sk}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Terhitung Mulai
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt)<span class="badge badge-primary"> {{$rjbt->tmt}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Keterangan Riwayat
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt)<span class="badge badge-primary"> {{$rjbt->ket}} </span> @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Keterangan Jabatan
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt) <span class="badge badge-primary">{{$rjbt->jabatanstruktural->ket}}</span>  @endforeach
</div>
</div><hr>

<div class="row">
<div class="col-md-5">
Aksi
</div>
<div class="col-md-7">
: @foreach($pegawai->riwayatjabatan as $rjbt) <a class="btn btn-primary btn-sm" href="/pegawai/jabatan/editpage/{{$rjbt->id_jabatan}}/{{$pegawai->id_peg}}">Edit</a>  @endforeach
</div>
</div><hr>

@else
Belum ada data
@endif

  </div>
  <!-- end home jabatan -->
  </div>
  <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">
 
        <div class="card p-3">
        <!-- card -->
        <form action="/pegawai/jabatan/tambah" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">

        <div class="row">
        <div class="col-md-6">
        <label >No. SK</label>
        <input type="text" name="no_sk" class="form-control">
        </div>
        <div class="col-md-6">
        <label >Tanggal SK</label>
        <input type="date" name="tgl_sk" class="form-control">
        </div>
        </div>

        <div class="row">
        <div class="col-md-6">
        <label >Pejabat Pengesah</label>
        <input type="text" name="pejabat_sk" class="form-control">
        </div>
        <div class="col-md-6">
        <label >Jabatan Struktural</label>
        <select name="kode_jbts" class="form-control">
        @foreach($jbts as $jb)
        <option value="{{$jb->kode_jbts}}">{{$jb->nama_jabatan}}</option>
        @endforeach
        </select>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6">
        <label>Terhitung Mulai</label>
        <input type="date" name="tmt" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Golongan</label>
        <select name="kode_gol" class="form-control">
        @foreach($gol as $g)
        <option value="{{$g->kode_gol}}">{{$g->pangkat}}</option>
        @endforeach
        </select>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12">
        <label >Ket</label>
        <input type="text" name="ket" class="form-control">
        </div>
        </div>

<div class="row m-3">
<input type="submit" value="Tambah" class="btn btn-success">
</div>
        </form>
        <!-- end card -->
        </div>

  </div>
  <div class="tab-pane fade" id="nav-hapus2" role="tabpanel" aria-labelledby="nav-hapus-tab2">
  @if($pegawai->riwayatjabatan->count() !== 0)
<!-- start hapus diklat -->
@foreach($pegawai->riwayatjabatan as $rjbt)
  <form action="/pegawai/jabatan/hapus/{{$rjbt->id_jabatan}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$rjbt->id_peg}}">
<button type="submit" class="btn btn-danger btn-sm m-2">Hapus riwayat dgn no. sk {{$rjbt->no_sk}}</button>
</form>
@endforeach
<!-- end hapus diklat -->
@else
Belum ada data jabatan
@endif
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal jabatan -->

<!-- start modal jabatan lain -->
<div class="modal fade" id="ModalJabatanfungsional" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Jabatan Fungsional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab3" data-toggle="tab" href="#nav-home3" role="tab" aria-controls="nav-home3" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab3" data-toggle="tab" href="#nav-profile3" role="tab" aria-controls="nav-profile3" aria-selected="false">Tambah</a>
    <a class="nav-item nav-link" id="nav-hapus-tab3" data-toggle="tab" href="#nav-hapus3" role="tab" aria-controls="nav-hapus3" aria-selected="false">Hapus</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home3" role="tabpanel" aria-labelledby="nav-home-tab3">
  <!-- start home jabatan lain -->
  <div class="card p-3">
  @if($pegawai->riwayatjabatanf->count() !== 0)
  <div class="row">
  <div class="col-md-5">
  Nama
  </div>
  <div class="col-md-7">
  : @foreach($pegawai->riwayatjabatanf as $rjbtf) <span class="badge badge-primary">{{$rjbtf->jabatanfungsional->nama_jabatan}}</span> @endforeach
  </div>
  </div><hr>

  <div class="row">
  <div class="col-md-5">
  Level
  </div>
  <div class="col-md-7">
  : @foreach($pegawai->riwayatjabatanf as $rjbtf) <span class="badge badge-primary">{{$rjbtf->jabatanfungsional->level}}</span> @endforeach
  </div>
  </div><hr>

  <div class="row">
  <div class="col-md-5">
  Ket. Jabatan
  </div>
  <div class="col-md-7">
  : @foreach($pegawai->riwayatjabatanf as $rjbtf)<span class="badge badge-primary"> {{$rjbtf->jabatanfungsional->ket}} </span> @endforeach
  </div>
  </div><hr>

  <div class="row">
  <div class="col-md-5">
  No. SK
  </div>
  <div class="col-md-7">
  : @foreach($pegawai->riwayatjabatanf as $rjbtf) <span class="badge badge-primary">{{$rjbtf->no_sk}}</span> @endforeach
  </div>
  </div><hr>

  <div class="row">
  <div class="col-md-5">
  Tanggal SK
  </div>
  <div class="col-md-7">
  : @foreach($pegawai->riwayatjabatanf as $rjbtf)<span class="badge badge-primary"> {{$rjbtf->tgl_sk}}</span>  @endforeach
  </div>
  </div><hr>

  <div class="row">
  <div class="col-md-5">
  Pejabat Pengesah
  </div>
  <div class="col-md-7">
  : @foreach($pegawai->riwayatjabatanf as $rjbtf)<span class="badge badge-primary"> {{$rjbtf->pejabat_sk}}</span>  @endforeach
  </div>
  </div><hr>

  <div class="row">
  <div class="col-md-5">
  Terhitung Mulai
  </div>
  <div class="col-md-7">
  : @foreach($pegawai->riwayatjabatanf as $rjbtf)<span class="badge badge-primary"> {{$rjbtf->tmt}} </span> @endforeach
  </div>
  </div><hr>

  <div class="row">
  <div class="col-md-5">
  Keterangan
  </div>
  <div class="col-md-7">
  : @foreach($pegawai->riwayatjabatanf as $rjbtf) <span class="badge badge-primary">{{$rjbtf->ket}}</span> @endforeach
  </div>
  </div><hr>

  <div class="row">
  <div class="col-md-5">
  Aksi
  </div>
  <div class="col-md-7">
  : @foreach($pegawai->riwayatjabatanf as $rjbtf) <a class="btn btn-primary btn-sm" href="/pegawai/jabatanfungsional/editpage/{{$rjbtf->id_jabatanf}}/{{$pegawai->id_peg}}">Edit</a> @endforeach
  </div>
  </div>
@else
Belum ada data
@endif
  <!-- card -->
  </div>
  <!-- end home jabtan lain -->
  </div>
  <div class="tab-pane fade" id="nav-profile3" role="tabpanel" aria-labelledby="nav-profile-tab3">
        <div class="card p-3">
        <!-- card -->
        <form action="/pegawai/jabatanfungsional/tambah" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">

        <div class="row">
        <div class="col-md-6">
        <label>No. SK</label>
        <input type="text" name="no_sk" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Tanggal SK</label>
        <input type="date" name="tgl_sk" class="form-control">
        </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-6">
        <label>Pejabat Pengesah</label>
        <input type="text" name="pejabat_sk" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Jabatan Fungsional</label>
        <select name="kode_jbtf" class="form-control">
        @foreach($jbtf as $j)
        <option value="{{$j->kode_jbtf}}">{{$j->nama_jabatan}}</option>
        @endforeach
        </select>
        </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-6">
        <label>Terhitung Mulai</label>
        <input type="date" name="tmt" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Golongan</label>
        <select name="kode_gol" class="form-control">
        @foreach($gol as $g)
        <option value="{{$g->kode_gol}}">{{$g->pangkat}}</option>
        @endforeach
        </select>
        </div>
        </div>
        
        <div class="row mt-2">
        <div class="col-md-12">
        <label>Keterangan</label>
        <input type="text" name="ket" class="form-control">
        </div>
        </div>

        <div class="row m-2">
        <input type="submit" value="Tambah" class="btn btn-success">
        </div>

        </form>
        <!-- end card -->
        </div>

  </div>
  <div class="tab-pane fade" id="nav-hapus3" role="tabpanel" aria-labelledby="nav-hapus-tab3">
  @if($pegawai->riwayatjabatanf->count() !== 0)
<!-- start hapus diklat -->
@foreach($pegawai->riwayatjabatanf as $rjbtf)
  <form action="/pegawai/jabatanfungsional/hapus/{{$rjbtf->id_jabatanf}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$rjbtf->id_peg}}">
<button type="submit" class="btn btn-danger btn-sm m-2">Hapus Jabatan dgn no. sk {{$rjbtf->no_sk}}</button>
</form>
@endforeach
<!-- end hapus diklat -->
@else
Belum ada data jabatan
@endif
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal jabatan lain -->

<!-- start modal jabatan lain -->
<div class="modal fade" id="ModalJabatanfungsionaltambahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Jabatan Fungsional Tambahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab31" data-toggle="tab" href="#nav-home31" role="tab" aria-controls="nav-home31" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab31" data-toggle="tab" href="#nav-profile31" role="tab" aria-controls="nav-profile31" aria-selected="false">Tambah</a>
    <a class="nav-item nav-link" id="nav-hapus-tab31" data-toggle="tab" href="#nav-hapus31" role="tab" aria-controls="nav-hapus31" aria-selected="false">Hapus</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home31" role="tabpanel" aria-labelledby="nav-home-tab31">
  <!-- start home jabatan lain -->
  <div class="card p-3">
  @if($pegawai->riwayatjabatanft->count() !== 0)

  <div class="row">
  <div class="col-md-4">
  Tugas Tambahan
  </div>
  <div class="col-md-8">
  : @foreach($pegawai->riwayatjabatanft as $rjbtft)<span class="badge badge-primary">{{$rjbtft->jabatanfungsionalt->tugas_tambahan}} </span>@endforeach
  </div>
</div><hr>

<div class="row">
  <div class="col-md-4">
  Jabatan
  </div>
  <div class="col-md-8">
  : @foreach($pegawai->riwayatjabatanft as $rjbtft)<span class="badge badge-primary">{{$rjbtft->jabatanfungsionalt->jabatan}}</span> @endforeach
  </div>
</div><hr>

<div class="row">
  <div class="col-md-4">
  Level
  </div>
  <div class="col-md-8">
  : @foreach($pegawai->riwayatjabatanft as $rjbtft)<span class="badge badge-primary">{{$rjbtft->jabatanfungsionalt->level}}</span> @endforeach
  </div>
</div><hr>

<div class="row">
  <div class="col-md-4">
  Ket. Tugas
  </div>
  <div class="col-md-8">
  : @foreach($pegawai->riwayatjabatanft as $rjbtft)<span class="badge badge-primary">{{$rjbtft->jabatanfungsionalt->ket}}</span> @endforeach
  </div>
</div><hr>

<div class="row">
  <div class="col-md-4">
  No. SK
  </div>
  <div class="col-md-8">
  : @foreach($pegawai->riwayatjabatanft as $rjbtft)<span class="badge badge-primary">{{$rjbtft->no_sk}}</span> @endforeach
  </div>
</div><hr>

<div class="row">
  <div class="col-md-4">
  Tanggal SK
  </div>
  <div class="col-md-8">
  : @foreach($pegawai->riwayatjabatanft as $rjbtft)<span class="badge badge-primary">{{$rjbtft->tgl_sk}}</span> @endforeach
  </div>
</div><hr>

<div class="row">
  <div class="col-md-4">
  Pejabat Pengesah
  </div>
  <div class="col-md-8">
  : @foreach($pegawai->riwayatjabatanft as $rjbtft)<span class="badge badge-primary">{{$rjbtft->pejabat_sk}}</span> @endforeach
  </div>
</div><hr>

<div class="row">
  <div class="col-md-4">
  Terhitung Mulai
  </div>
  <div class="col-md-8">
  : @foreach($pegawai->riwayatjabatanft as $rjbtft)<span class="badge badge-primary">{{$rjbtft->tmt}}</span> @endforeach
  </div>
</div><hr>

<div class="row">
  <div class="col-md-4">
  Aksi
  </div>
  <div class="col-md-8">
  : @foreach($pegawai->riwayatjabatanft as $rjbtft)<a class="btn btn-primary btn-sm" href="/pegawai/jabatanfungsionalt/editpage/{{$rjbtft->id_jbtft}}/{{$pegawai->id_peg}}">Edit</a> @endforeach
  </div>
</div>

@else
Belum ada data
@endif
  <!-- card -->
  </div>
  <!-- end home jabtan lain -->
  </div>
  <div class="tab-pane fade" id="nav-profile31" role="tabpanel" aria-labelledby="nav-profile-tab31">
  <div class="card p-3">
        <!-- card -->
        <form action="/pegawai/jabatanfungsionalt/tambah" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$pegawai->id_peg}}">

        <div class="row">
        <div class="col-md-6">
        <label>No. SK</label>
        <input type="text" name="no_sk" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Tanggal SK</label>
        <input type="date" name="tgl_sk" class="form-control">
        </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-6">
        <label>Pejabat Pengesah</label>
        <input type="text" name="pejabat_sk" class="form-control">
        </div>
        <div class="col-md-6">
        <label>Jabatan Tambahan</label>
        <select name="kode_jbtft" class="form-control">
        @foreach($jbtft as $j)
        <option value="{{$j->kode_jbtft}}">{{$j->tugas_tambahan}}</option>
        @endforeach
        </select>
        </div>
        </div>

        <div class="row mt-2">
        <div class="col-md-12">
        <label>Terhitung Mulai</label>
        <input type="date" name="tmt" class="form-control">
        </div>
        </div>

        <div class="row m-2">
        <input type="submit" value="Tambah" class="btn btn-success">
        </div>

        </form>
        <!-- end card -->
        </div>
  </div>
  <div class="tab-pane fade" id="nav-hapus31" role="tabpanel" aria-labelledby="nav-hapus-tab31">
  @if($pegawai->riwayatjabatanft->count() !== 0)
<!-- start hapus diklat -->
@foreach($pegawai->riwayatjabatanft as $rjbtft)
  <form action="/pegawai/jabatanfungsionalt/hapus/{{$rjbtft->id_jbtft}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="id_peg" value="{{$rjbtft->id_peg}}">
<button type="submit" class="btn btn-danger btn-sm m-2">Hapus data dgn no. sk {{$rjbtft->no_sk}}</button>
</form>
@endforeach
<!-- end hapus diklat -->
@else
Belum ada data jabatan
@endif
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal jabatan lain -->
          @endsection