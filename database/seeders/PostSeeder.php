<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'date_of_publish' => '2013-06-07 04:50:02',
                'car_id' => 2,
                'user_id' => 1,
                'count_in_package' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 4,
                'user_id' => 2,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 5,
                'user_id' => 2,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 1,
                'user_id' => 1,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 2,
                'user_id' => 2,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 4,
                'user_id' => 2,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 5,
                'user_id' => 2,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 4,
                'user_id' => 2,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 4,
                'user_id' => 2,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 3,
                'user_id' => 2,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_of_publish' => '2016-06-07 04:50:02',
                'car_id' => 6,
                'user_id' => 2,
                'count_in_package' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::connection('mysql2')->table('posts')->insert($posts);
    }
}
