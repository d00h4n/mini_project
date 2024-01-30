<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'users';

    protected $fillable = [
        'nama',
        'id_posisi',
        'roles',
        'gambar',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'username',
        'email',
        'password',
        'no_hp',
        'tanggal_masuk',
    ];

    public function posisi()
    {
        return $this->belongsTo('App\Models\Posisi', 'id_posisi');
    }
}
