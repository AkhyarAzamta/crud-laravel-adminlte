<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "mahasiswa"; 
    protected $fillable = ['nama', 'jenkel', 'alamat', 'hp', 'jurusan', 'email', 'foto', 'no_ktp', 'nidn_dosen'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn_dosen', 'nidn');
    }

    public function matkul()
    {
        return $this->belongsToMany(Matkul::class)->withPivot(['nilai']);
    }
}
