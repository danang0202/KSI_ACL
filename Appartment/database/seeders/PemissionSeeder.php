<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
            [
                'id' => 'TM',
                'nama_permission' => 'Akses Taman'
            ],
            [
                'id' => 'KR',
                'nama_permission' => 'Akses Kolam Renang'
            ],
            [
                'id' => 'GY',
                'nama_permission' => 'Akses Gym'
            ],
            [
                'id' => 'LB',
                'nama_permission' => 'Akses Lapangan Bulutangkis'
            ]
        ]);
    }
}
