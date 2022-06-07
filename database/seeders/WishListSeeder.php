<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 17; $i++) {
            DB::table('wish_lists')->insert([
                'user_id' => $i,
                'product_id' => rand(1, 67),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
