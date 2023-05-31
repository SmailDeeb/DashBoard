<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Super Admin',
                'username' => 'SuperAdmin',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('SuperAdmin@123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('admins')->insert($admins);
    }
}
