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
                'fasilitas_id' => 1,
                'access' => TRUE
            ],
            [
                'fasilitas_id' => 2,
                'access' => TRUE
            ],
            [
                'fasilitas_id' => 3,
                'access' => TRUE
            ],
            [
                'fasilitas_id' => 4,
                'access' => TRUE
            ],
            [
                'fasilitas_id' => 5,
                'access' => TRUE
            ],
            [
                'fasilitas_id' => 1,
                'access' => FALSE
            ],
            [
                'fasilitas_id' => 2,
                'access' => FALSE
            ],
            [
                'fasilitas_id' => 3,
                'access' => FALSE
            ],
            [
                'fasilitas_id' => 4,
                'access' => FALSE
            ],
            [
                'fasilitas_id' => 5,
                'access' => FALSE
            ],
        ]);
    }
}