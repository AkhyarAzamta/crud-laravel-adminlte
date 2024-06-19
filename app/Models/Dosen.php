<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = ['nama_dosen','nidn'];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'nidn_dosen', 'nidn');
    }
}
