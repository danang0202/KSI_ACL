<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'nama' => 'Guswana',
                'email' => 'gus@gmail.com',
                'password' => 'gus123',
                'no_kartu_unit' => '12077',
                'tipe_unit_id' => 2,
                'alamat' => 'alamat gus',
                'role_id' => 'penghuni'
            ],
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin123',
                'no_kartu_unit' => '12077',
                'tipe_unit_id' => 2,
                'alamat' => 'alamat admin',
                'role_id' => 'admin'
            ],
            [
                'nama' => 'Danang',
                'email' => 'danang@gmail.com',
                'password' => 'danang123',
                'no_kartu_unit' => '12077',
                'tipe_unit_id' => 3,
                'alamat' => 'alamat danang',
                'role_id' => 'penghuni'
            ],
        ]);
    }
}