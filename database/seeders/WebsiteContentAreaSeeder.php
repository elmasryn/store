<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteContentAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_content_areas')->insert([
            ['name' => 'ads', 'type' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'navbar', 'type' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'logo', 'type' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_adress', 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_phone', 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_email', 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_head_1', 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_head_2', 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_col_1', 'type' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_col_2', 'type' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_head_last', 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_head_3', 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_head_4', 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_head_5', 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_col_3', 'type' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_col_4', 'type' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer_col_5', 'type' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'social', 'type' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
