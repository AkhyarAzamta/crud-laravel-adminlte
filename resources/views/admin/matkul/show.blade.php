@extends('layouts.admin')

@section('content')

<div class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Mata Kuliah Mahasiswa</h3>
      <div class="card-tools">
        <form action="{{ route('mahasiswa.search') }}" class="form-inline" method="GET">
          <input type="search" name="search" class="form-control float-right" placeholder="Search">
          <div class="input-group-append">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>Nama Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Dosen</th>
            <th>Semester</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>
        <tbody>
    @foreach ($mahasiswa as $mhs)
        @foreach ($mhs->matkuls as $matkul)
            <tr>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $matkul->nama_matkul }}</td>
                <td>{{ $matkul->dosen->nama_dosen }}</td>
                <td>{{ $matkul->semester }}</td>
                <td>{{ $matkul->nilai }}</td>
            </tr>
        @endforeach
    @endforeach
</tbody>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>

@endsection
