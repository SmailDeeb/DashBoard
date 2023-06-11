<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John',
                'email' => 'john@example.com',
                'password' => Hash::make('Test@123'),
                'cell_phone' => '0928374928',
                'subscription_package_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test',
                'email' => 'test@example.com',
                'password' => Hash::make('Test@123'),
                'cell_phone' => '0928374928',
                'subscription_package_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test2',
                'email' => 'test2@example.com',
                'password' => Hash::make('Test@123'),
                'cell_phone' => '0928374928',
                'subscription_package_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        DB::connection('mysql2')->table('users')->insert($users);
    }
}
