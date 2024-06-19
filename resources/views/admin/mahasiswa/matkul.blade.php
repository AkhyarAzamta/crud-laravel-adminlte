@extends('layouts.admin')

@section('content')

<div class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Mata Kuliah Uninus</h3>
      <div class="card-tools">
        <form action="/mahasiswa/search" class="form-inline" method="GET">
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
          @foreach ($mahasiswa as $mhs)
            <tr>
              <td>{{ $mhs->nama }}</td>
              <td>
                <ul style="list-style-type: none; padding: 0;">
                  @foreach ($mhs->matkul as $mk)
                    <li>{{ $mk->nama_matkul }}</li> 
                  @endforeach
                </ul>
              </td>
              <td>
                <ul style="list-style-type: none; padding: 0;">
                  @foreach ($mhs->matkul as $mk)
                    <li>{{ $mk->dosen }}</li>
                  @endforeach
                </ul>
              </td>
              <td>
                <ul style="list-style-type: none; padding: 0;">
                  @foreach ($mhs->matkul as $mk)
                    <li>{{ $mk->semester }}</li>
                  @endforeach
                </ul>
              </td>
              <td>
                <ul style="list-style-type: none; padding: 0;">
                  @foreach ($mhs->matkul as $mk)
                    <li>{{ $mk->pivot->nilai }}</li>
                  @endforeach
                </ul>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>

@endsection
