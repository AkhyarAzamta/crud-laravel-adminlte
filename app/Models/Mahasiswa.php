<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa"; 
    protected $fillable = ['id', 'nama', 'jenkel', 'alamat', 'hp', 'jurusan', 'email','foto','no_ktp'];

    public function dosen()
{
    return $this->belongsTo(Dosen::class, 'nidn_dosen', 'nidn');
}


    public function matkul() {
        return $this->belongsToMany('App\Models\Matkul')->withPivot(['nilai']);
    }
}
