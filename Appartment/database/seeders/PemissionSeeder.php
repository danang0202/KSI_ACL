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
                'slug_objek' => 'tm',
                'nama_objek' => 'Taman'
            ],
            [
                'slug_objek' => 'kr',
                'nama_objek' => 'Kolam Renang'
            ],
            [
                'slug_objek' => 'gy',
                'nama_objek' => 'Gym'
            ],
            [
                'slug_objek' => 'bt',
                'nama_objek' => 'Lapangan Bulutangkis'
            ],
            [
                'slug_objek' => 'Bs',
                'nama_objek' => 'Lapangan Basket'
            ],
        ]);
    }
}