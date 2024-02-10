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
            ['nama_fasilitas' => 'Taman'],
            ['nama_fasilitas' => 'Kolam Renang'],
            ['nama_fasilitas' => 'Gym'],
            ['nama_fasilitas' => 'Lapangan Bulutangkis'],
        ]);
    }
}
