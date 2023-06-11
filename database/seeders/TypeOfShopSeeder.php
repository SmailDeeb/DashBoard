<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeOfShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeOfShops = [
            [
                'name' => 'Shop type 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shop type 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shop type 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shop type 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shop type 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::connection('mysql2')->table('type_of_shops')->insert($typeOfShops);
    }
}
