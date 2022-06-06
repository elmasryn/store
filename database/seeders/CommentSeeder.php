<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 17; $i++) {
            DB::table('comments')->insert([
                'user_id' => rand(1,16),
                'commentable_id' => rand(1,67),
                'commentable_type' => Arr::random(['pages', 'products', 'products', 'products', 'products']),
                'name' => Arr::random(['Ahmed', 'Mohamed', 'Ali', 'Moamen', 'Safwat', Null, Null, Null, Null, Null]),
                'body' => Arr::random(['thanks', 'thank you so much', 'it is so fine thanks', 'thank you very much', 'I would like to thank you for everything you provide']),
                'published_at' => Arr::random([now()->addMinutes(2), now()->addMinutes(3), now()->addMinutes(4), now()->addMinutes(5), now()->addMinutes(6), Null]),
                'rejected_at' => Arr::random([now()->addMinutes(7), Null, Null, Null, Null, Null, Null, Null, Null]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
