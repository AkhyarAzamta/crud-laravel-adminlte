<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen'; // Nama tabel dalam basis data

    protected $fillable = ['nama_dosen', 'nidn']; // Kolom yang dapat diisi

    /**
     * Relationship One-to-Many dengan model Mahasiswa.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'nidn_dosen', 'nidn');
    }
}
