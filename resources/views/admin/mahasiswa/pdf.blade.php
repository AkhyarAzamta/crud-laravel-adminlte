<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Jurusan</th>
                <th>Email</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
