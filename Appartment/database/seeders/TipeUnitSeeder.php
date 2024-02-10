<?php

namespace Database\Seeders;

use App\Models\TipeUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipeUnit::insert([
            ['nama_tipe_unit'=>'Amaryllis'],
            ['nama_tipe_unit'=>'Bougenville'],
            ['nama_tipe_unit'=>'Violet'],
            ['nama_tipe_unit'=>'Rose'],
            ['nama_tipe_unit'=>'Clover'],
            ['nama_tipe_unit'=>'Orchid'],
        ]);
    }
}
