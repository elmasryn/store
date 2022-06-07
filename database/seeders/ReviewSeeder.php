<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 17; $i++) {
            DB::table('reviews')->insert([
                'user_id' => rand(1,16),
                'product_id' => rand(1,67),
                'stars' => rand(1,5),
                'body' => Arr::random(['Good product', 'I buy it waw', 'fine', 'bad try', 'I will buy another one soon thanks']),
                'published_at' => Arr::random([now()->addMinutes(12), now()->addMinutes(13), now()->addMinutes(14), now()->addMinutes(15), now()->addMinutes(16), Null]),
                'rejected_at' => Arr::random([now()->addMinutes(17), Null, Null, Null, Null, Null, Null, Null, Null]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
