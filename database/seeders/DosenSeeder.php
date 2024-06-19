<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run()
    {
        Dosen::create([
            'nama_dosen' => 'Dr. John Doe',
            'nidn' => '1234567890',
        ]);

        Dosen::create([
            'nama_dosen' => 'Prof. Jane Smith',
            'nidn' => '0987654321',
        ]);

        // Tambahkan data dosen lainnya sesuai kebutuhan
    }
}
