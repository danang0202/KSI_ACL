<?php

namespace Database\Seeders;
use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fasilitas::insert([
            ['nama_fasilitas'=>'Taman'],
            ['nama_fasilitas'=>'Kolam Renang'],
            ['nama_fasilitas'=>'Gym'],
            ['nama_fasilitas'=>'Lapangan Bulutangkis'],
            ['nama_fasilitas'=>'Lapangan Basket'],
        ]);
    }
}