<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transmissions = [
            [
                'type' => 'Transmission 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Transmission 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Transmission 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Transmission 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Transmission 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::connection('mysql2')->table('transmissions')->insert($transmissions);
    }
}
