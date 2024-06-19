<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {

        Mahasiswa::create([
            'nama' => 'Ervan A.A',
            'jenkel' => 'Pria',
            'alamat' => 'Jl. Jalan Skuy No. 1',
            'hp' => '08123456789',
            'jurusan' => 'Teknik Informatika',
            'email' => 'ervan@mail.com',
            'nidn_dosen' => 1,
        ]);

        Mahasiswa::create([
            'nama' => 'Akhyar A',
            'jenkel' => 'Pria',
            'alamat' => 'Jl. Mana Aja No. 2',
            'hp' => '08123456788',
            'jurusan' => 'Teknik Elektronika',
            'email' => 'Akhyar@mail.com',
            'nidn_dosen' => 2,
        ]);
        
        Mahasiswa::create([
            'nama' => 'Akhyar A',
            'jenkel' => 'Pria',
            'alamat' => 'Jl. Mana Aja No. 2',
            'hp' => '08123456788',
            'jurusan' => 'Teknik Elektronika',
            'email' => 'Akhyar@mail.com',
            'nidn_dosen' => 3,
        ]);
    }
}
