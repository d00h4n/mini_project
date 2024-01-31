<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama' => 'Rudi',
                'id_posisi' => 1,
                'gambar' => 'rudi.jpg',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '1990-01-01',
                'alamat' => 'Jl. Kalisombo Salatiga',
                'username' => 'rudi ganteng',
                'email' => 'rudi@gmail.com',
                'password' => bcrypt('rudi123'),
                'no_hp' => '081234567890',
                'tanggal_masuk' => '2022-01-01',
            ], [
                'nama' => 'Fernando',
                'id_posisi' => 2,
                'gambar' => 'fernando.jpg',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '1990-01-01',
                'alamat' => 'Maluku',
                'username' => 'Kaka Fernando',
                'email' => 'fernando@gmail.com',
                'password' => bcrypt('fernando123'),
                'no_hp' => '081234567890',
                'tanggal_masuk' => '2022-01-01',
            ], [
                'nama' => 'Jepri',
                'id_posisi' => 2,
                'gambar' => 'jepri.jpg',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '1990-01-01',
                'alamat' => 'Surakarta',
                'username' => 'Bang Jep',
                'email' => 'jepri@gmail.com',
                'password' => bcrypt('password123'),
                'no_hp' => '081234567890',
                'tanggal_masuk' => '2022-01-01',
            ]
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
