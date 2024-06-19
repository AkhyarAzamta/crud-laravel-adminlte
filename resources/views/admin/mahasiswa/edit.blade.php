@extends('layouts.admin')

@section('content')
    
<div class="content">
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Edit Mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="{{$mahasiswa->nama}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Pilih jenis kelamin</label>
            <select name="jenkel" id="" class="custom-select rounded-0">
                <option selected="">Pilih Jenis kelamin</option>
                <option value="Pria" @if($mahasiswa->jenkel == 'Pria') selected @endif>Pria</option>
                <option value="Wanita" @if($mahasiswa->jenkel == 'Wanita') selected @endif>Wanita</option>
            </select>
            <label for="alamat" class="form-label">Alamat</label>
            <div class="form-floating">
                <textarea name="alamat" id="floatingTextarea" class="form-control">{{$mahasiswa->alamat}}</textarea>
            </div>
        </div>
        <div class="form-group"> 
            <label for="hp">No HP</label>
            <input type="number" name="hp" class="form-control" placeholder="+62" value="{{$mahasiswa->hp}}">
        </div>
        <div class="form-group">
            <label for="jurusan">Pilih Jurusan</label>
            <select name="jurusan" id="" class="custom-select rounded-0">
                <option selected="{{ $mahasiswa->jurusan }}">{{ $mahasiswa->jurusan }}</option>
                <option value="Teknik Informatika" @if($mahasiswa->jurusan == 'Teknik Informatika') selected @endif>Teknik Informatika</option>
                <option value="Teknik Industri" @if($mahasiswa->jurusan == 'Teknik Industri') selected @endif>Teknik Industri</option>
                <option value="Teknik Elektro" @if($mahasiswa->jurusan == 'Teknik Elektro') selected @endif>Teknik Elektro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Masukkan Email anda" value="{{$mahasiswa->email}}">
        </div>
        
        <div class="form-group">
            <label for="nidn_dosen">Pilih Dosen</label>
            <select name="nidn_dosen" id="nidn_dosen" class="form-control">
                <option value="" selected>Pilih Dosen</option>
                @foreach ($dosen as $d)
                <option value="{{ $d->id }}" @if($mahasiswa->nidn_dosen == $d->id) selected @endif>{{ $d->nama_dosen }}</option>
                @endforeach
            </select>
        </div>
    </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-warning">Update</button>
      </div>
</div>
    </form>
  </div>
  
@endsection
