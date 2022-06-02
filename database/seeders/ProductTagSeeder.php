<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 68; $i++) { 
            DB::table('product_tag')->insert([
                'product_id' => $i,
                'tag_id' => $i < 15 ? 1 : ($i < 33 ? 11 : ($i < 42 ? 12 : ($i < 52 ? 13 : ($i < 60 ? 14 : 15)))),
            ]);
        }

        DB::table('product_tag')->insert([
            ['tag_id' => 4, 'product_id' => 25],
            ['tag_id' => 4, 'product_id' => 29],
            ['tag_id' => 4, 'product_id' => 31],
            ['tag_id' => 6, 'product_id' => 27],
            ['tag_id' => 7, 'product_id' => 11],
            ['tag_id' => 7, 'product_id' => 12],
            ['tag_id' => 7, 'product_id' => 26],
            ['tag_id' => 9, 'product_id' => 13],
            ['tag_id' => 9, 'product_id' => 22],
            ['tag_id' => 9, 'product_id' => 24],
            ['tag_id' => 9, 'product_id' => 26],
            ['tag_id' => 20, 'product_id' => 1],
            ['tag_id' => 20, 'product_id' => 2],
            ['tag_id' => 20, 'product_id' => 21],
        ]);
    }
}
