@extends('layouts.admin')

@section('content')
    
<div class="content">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{'/mahasiswa/store'}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="Text" class="form-control" name="nama" placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Pilih jenis kelamin</label>
            <select name="jenkel" id=""class="custom-select rounded-0">
                <option selected="">Pilih Jenis kelamin</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <label for="alamat" class="form-label">Alamat</label>
            <div class="form-floating">
                <textarea name="alamat" id="floatingTextarea" class="form-control" ></textarea>
            </div>
        <div class="form-group"> 
            <label for="hp">No HP</label>
            <input type="number" name="hp" class="form-control" placeholder="+62">
        </div>
        <div class="form-group ">
            <label for="jurusan" >Pilih Jurusan</label>
            <select name="jurusan" id="" class="custom-select rounded-0">
                <option selected="">Pilih Jurusan</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik elektro">Teknik elektro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Masukkan Email anda">
        </div>

        <div class="form-group">
    <label for="nidn_dosen">Pilih Dosen</label>
    <select name="nidn_dosen" id="nidn_dosen" class="form-control">
        <option value="" selected>Pilih Dosen</option>
        @foreach ($dosen as $d)
            <option value="{{ $d->id }}">{{ $d->nama_dosen }}</option>
        @endforeach
    </select>
</div>


        <div class="card card-danger">
            <div class="card-header">
                <div class="card-title">Upload Dokumen</div>
            </div>
        </div>
          <label for="foto" class="form-label">Foto</label>
        <div class="input-group mb-3">
            <input type="file" name="foto" class="form-control" id="inputGroupFile">
        <label for="inputGroupFile" class="input-group-text">Upload</label>
      </div>
      <label for="foto" class="form-label">No KTP</label>
      <div class="input-group mb-3">
          <input type="file" name="no_ktp" class="form-control" id="inputGroupFile2">
      <label for="inputGroupFile" class="input-group-text">Upload</label>
    </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</div>
    </form>
  </div>
  
  @endsection
  