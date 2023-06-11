<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fuelTypes = [
            [
                'type' => 'Fuel type 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fuel type 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fuel type 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fuel type 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Fuel type 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::connection('mysql2')->table('fuel_types')->insert($fuelTypes);
    }
}
