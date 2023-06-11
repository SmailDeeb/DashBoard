<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Brand 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brand 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brand 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brand 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brand 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::connection('mysql2')->table('brands')->insert($brands);
    }
}
