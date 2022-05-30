<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 21; $i++) {
            DB::table('tags')->insert([
                'name' => ['technology', 'programming', 'movies', 'cloths', 'kitchen', 'shoes', 'watches', 'bath', 'accessories', 'books', 'games', 'chess', 'pool', 'training', 'car', 'motorcycle', 'toys', 'stuff', 'magazines', 'mobiles'][$i-1],
                'slug' => [Str::slug('technology', '-'), Str::slug('programming', '-'), Str::slug('movies', '-'), Str::slug('cloths', '-'), Str::slug('kitchen', '-'), Str::slug('shoes', '-'), Str::slug('watches', '-'), Str::slug('bath', '-'), Str::slug('accessories', '-'), Str::slug('books', '-'), Str::slug('games', '-'), Str::slug('chess', '-'), Str::slug('pool', '-'), Str::slug('training', '-'), Str::slug('car', '-'), Str::slug('motorcycle', '-'), Str::slug('toys', '-'), Str::slug('stuff', '-'), Str::slug('magazines', '-'), Str::slug('mobiles', '-')][$i-1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
