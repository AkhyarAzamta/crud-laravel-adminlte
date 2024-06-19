<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        // Ambil ID dari dosen yang sudah ada
        $dosen1 = Dosen::where('nama_dosen', 'Dr. John Doe')->first();
        $dosen2 = Dosen::where('nama_dosen', 'Prof. Jane Smith')->first();

        Mahasiswa::create([
            'nama' => 'Alice',
            'jenkel' => 'Perempuan',
            'alamat' => 'Jl. Contoh No. 1',
            'hp' => '08123456789',
            'jurusan' => 'Teknik Informatika',
            'email' => 'alice@example.com',
            'nidn_dosen' => $dosen1->id, // ID dari dosen Dr. John Doe
        ]);

        Mahasiswa::create([
            'nama' => 'Bob',
            'jenkel' => 'Laki-laki',
            'alamat' => 'Jl. Contoh No. 2',
            'hp' => '08123456788',
            'jurusan' => 'Sistem Informasi',
            'email' => 'bob@example.com',
            'nidn_dosen' => $dosen2->id, // ID dari dosen Prof. Jane Smith
        ]);

        // Tambahkan data mahasiswa lainnya sesuai kebutuhan
    }
}
