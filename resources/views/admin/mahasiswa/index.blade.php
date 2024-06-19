@extends('layouts.admin')

@section ('content')

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Mahasiswa</h3> &nbsp;
            <a href="{{url('/downloadpdf')}}" target="_blank" class="btn btn-info btn_md">Download PDF</a>
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
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->jenkel }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>{{ $mhs->hp }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>
                        <form action="/mahasiswa/{{ $mhs->id }}/delete" method="POST" style="display:inline;">
                        @csrf
                        @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini? {{ $mhs->nama }}')">Hapus</button>
                        </form>
                        <a href="/mahasiswa/{{ $mhs->id }}/edit" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach                   
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
