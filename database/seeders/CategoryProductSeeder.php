<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 68; $i++) { 
            DB::table('category_product')->insert([
                'category_id' => $i < 23 ? 1 : ($i < 33 ? 2 : ($i < 42 ? 4 : ($i < 52 ? 3 : ($i < 60 ? 5 : 6)))),
                'product_id' => $i,
            ]);
        }

        DB::table('category_product')->insert([
            ['category_id' => 10, 'product_id' => 1],
            ['category_id' => 10, 'product_id' => 2],
            ['category_id' => 11, 'product_id' => 4],
            ['category_id' => 22, 'product_id' => 44],
            ['category_id' => 22, 'product_id' => 45],
            ['category_id' => 22, 'product_id' => 46],
        ]);
    }
}
