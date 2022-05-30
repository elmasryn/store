<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('option_values')->insert([
                'user_id' => rand(1,4),
                'option_id' => $i < 3 ? 1 : ($i < 5 ? 2 : ($i < 7 ? 3 : ($i < 9 ? 4 : 5))),
                'name' => ['red', 'blue', '32px', '64px', '10g', '15g', 'Egypt', 'China', 'Samsung', 'Apple'][$i-1],
                'charge' => [Null, Null, 5.00, 10.00, Null, 9, Null, Null, Null, 15.00][$i-1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
