@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Dosen dan Mahasiswa</h3>

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
                        <th>NIDN</th>
                        <th>Nama Dosen</th>
                        <th>Nama Mahasiswa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $d)
                    <tr>
                        <td>{{ $d->nidn }}</td>
                        <td>{{ $d->nama_dosen }}</td>
                        <td>
                            @foreach ($d->mahasiswa as $mhs)
                            {{ $mhs->nama }},
                            @endforeach
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
