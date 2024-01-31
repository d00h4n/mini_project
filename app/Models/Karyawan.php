<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class Karyawan extends Authenticatable implements AuthenticatableContract
{
    use HasFactory, Notifiable;
    protected $table = 'karyawan';

    protected $fillable = [
        'nama',
        'id_posisi',
        'gambar',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'username',
        'email',
        'password',
        'no_hp',
        'tanggal_masuk',
        'create_at',
        'update_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
