<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run()
    {
        Dosen::create([
            'nama_dosen' => 'GALIH, S.T., M.KOM.',
            'nidn' => '1',
        ]);

        Dosen::create([
            'nama_dosen' => 'MUHAMAD IKMAL WIAWAN, S.TR.KOM., M.KOM.',
            'nidn' => '2',
        ]);
        Dosen::create([
            'nama_dosen' => 'SITI NUR, S.ST., M.KOM.',
            'nidn' => '3',
        ]);
        Dosen::create([
            'nama_dosen' => 'DR. IR. TEDJO DARMANTO, M.T.',
            'nidn' => '4',
        ]);

        // Tambahkan data dosen lainnya sesuai kebutuhan
    }
}
