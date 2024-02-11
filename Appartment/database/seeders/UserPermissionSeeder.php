<?php

namespace Database\Seeders;

use App\Models\UserPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPermission::insert([
            [
                'user_id' => 1,
                'permission_id' => 1
            ],
            [
                'user_id' => 1,
                'permission_id' => 2
            ],
            [
                'user_id' => 3,
                'permission_id' => 1
            ],
            [
                'user_id' => 3,
                'permission_id' => 4
            ],
        ]);
    }
}