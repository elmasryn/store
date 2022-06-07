<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            DB::table('sliders')->insert([
                'user_id' => [1, 1, 4][$i-1],
                'start_at' => now(),
                'end_at' => [now()->addMinutes(120), now()->addDays(10), now()->addDays(100)][$i-1],
                'img' => ['main-slider-1-1.jpg', 'main-slider-1-2.jpg', 'main-slider-1-3.jpg'][$i-1],
                'status' => [true, true, false][$i-1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
