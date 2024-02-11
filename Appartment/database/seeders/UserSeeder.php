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
                'name' => 'Guswana',
                'email' => 'gus@gmail.com',
                'password' => 'gus123',
                'no_kartu_unit' => '12073',
                'tipe_unit_id' => 2,
                'alamat' => 'alamat gus',
                'role_id' => 1
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin123',
                'no_kartu_unit' => '12077',
                'tipe_unit_id' => 2,
                'alamat' => 'alamat admin',
                'role_id' => 2
            ],
            [
                'name' => 'Danang',
                'email' => 'danang@gmail.com',
                'password' => 'danang123',
                'no_kartu_unit' => '12075',
                'tipe_unit_id' => 3,
                'alamat' => 'alamat danang',
                'role_id' => 1
            ],
        ]);
    }
}