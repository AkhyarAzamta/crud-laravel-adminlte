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
            'nama' => 'Azamta A',
            'jenkel' => 'Pria',
            'alamat' => 'Jl. Terus weh No. 3',
            'hp' => '08123456788',
            'jurusan' => 'Teknik Industri',
            'email' => 'Azam@mail.com',
            'nidn_dosen' => 3,
        ]);
        Mahasiswa::create([
            'nama' => 'Fiersa Besari',
            'jenkel' => 'Pria',
            'alamat' => 'Jl. Tapi Ga Jadian No. 4',
            'hp' => '08123456788',
            'jurusan' => 'Teknik Musik',
            'email' => 'Bung@mail.com',
            'nidn_dosen' => 4,
        ]);
        Mahasiswa::create([
            'nama' => 'Lancelot',
            'jenkel' => 'Pria',
            'alamat' => 'Jl. Core No. 5',
            'hp' => '08123456788',
            'jurusan' => 'Teknik Farming',
            'email' => 'Pance@mail.com',
            'nidn_dosen' => 1,
        ]);
        Mahasiswa::create([
            'nama' => 'Benedetta',
            'jenkel' => 'Wanita',
            'alamat' => 'Jl. Exp No. 6',
            'hp' => '08123456788',
            'jurusan' => 'Teknik Rotasi',
            'email' => 'Benet@mail.com',
            'nidn_dosen' => 2,
        ]);
    }
}
