<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carModels = [
            [
                'name' => 'Model 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Model 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Model 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Model 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Model 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::connection('mysql2')->table('car_models')->insert($carModels);
    }
}
