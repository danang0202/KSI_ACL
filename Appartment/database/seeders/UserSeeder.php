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
                'password' => '$2y$10$aADlRAXXnxo4QipISe826e7QN5fCuCG1uPLcn5FHRiGqctIw1Av7e',
                //gus123
                'no_kartu_unit' => '12073',
                'tipe_unit_id' => 2,
                'alamat' => 'alamat gus',
                'role_id' => 1
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$C22IQmDto7PQcKGIkf304OXhpxXRjYxQsZXFu3b1Wxzb49RzftSzW',
                //admin123
                'no_kartu_unit' => '12077',
                'tipe_unit_id' => 2,
                'alamat' => 'alamat admin',
                'role_id' => 2
            ],
            [
                'name' => 'Danang',
                'email' => 'danang@gmail.com',
                'password' => '$2y$10$Oq3o.s/oMIvGkIwVefSC.OIV9iMQXwQgcuB2tMAhSDCT.NugdHWPC',
                //danang123
                'no_kartu_unit' => '12075',
                'tipe_unit_id' => 3,
                'alamat' => 'alamat danang',
                'role_id' => 1
            ],
        ]);
    }
}