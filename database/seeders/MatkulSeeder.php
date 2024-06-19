<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matkul;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data contoh untuk dimasukkan ke dalam tabel matkul
        $matkuls = [
            [
                'mahasiswa_id' => 1,
                'nama_matkul' => 'Pengembangan Aplikasi Berbasis Kerangka Kerja',
                'dosen_id' => 1,
                'semester' => 'Genap',
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => 2,
                'nama_matkul' => 'Mobile Programming',
                'dosen_id' => 2,
                'semester' => 'Genap',
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => 3,
                'nama_matkul' => 'Metodologi Penelitian',
                'dosen_id' => 3,
                'semester' => 'Genap',
                'nilai' => 'B',
            ],
            // Tambahkan data matkul lainnya sesuai kebutuhan
        ];

        // Loop untuk menyimpan data matkul ke dalam database
        foreach ($matkuls as $matkul) {
            Matkul::create($matkul);
        }
    }
}
