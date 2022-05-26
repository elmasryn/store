<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 6; $i++) {
            DB::table('countries')->insert([
                'name' => ['Egypt', 'Saudi Arabia', 'United Arab Emirates', 'Sudan', 'United States'][$i-1],
                'slug' => [Str::slug('Egypt', '-'), Str::slug('Saudi Arabia', '-'), Str::slug('United Arab Emirates', '-'), Str::slug('Sudan', '-'), Str::slug('United States', '-')][$i-1],
                'currency' => ['EGP', 'SAR', 'AED', 'SDG', 'USD'][$i-1],
                'code' => ['+20', '+966', '+971', '+249', '+1'][$i-1],
                'status' => [true, true, true, true, false][$i-1],
                'img' => ['frontend/images/countries/Egypt.png', 'frontend/images/countries/Saudi-Arabia.png', 'frontend/images/countries/United-Arab-Emirates.png', 'frontend/images/countries/Sudan.png', 'frontend/images/countries/United-States.png'][$i-1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
