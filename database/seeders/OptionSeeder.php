<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 6; $i++) {
            DB::table('options')->insert([
                'user_id' => rand(1,3),
                'name' => ['color', 'size', 'weight', 'made_in', 'manufacturer'][$i-1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
