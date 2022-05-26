<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('cities')->insert([
                'country_id' => $i < 4 ? 1 : ($i < 6 ? 2 : ($i == 6 ? 3 : ($i == 7 ? 4 : 5))),
                'name' => ['Cairo', 'Alexandria', 'Tanta', 'Riyadh', 'Mecca', 'Dubai', 'Khartoum', 'New York', 'Los Angeles', 'Chicago'][$i-1],
                'slug' => [Str::slug('Cairo', '-'), Str::slug('Alexandria', '-'), Str::slug('Tanta', '-'), Str::slug('Riyadh', '-'), Str::slug('Mecca', '-'), Str::slug('Dubai', '-'), Str::slug('Khartoum', '-'), Str::slug('New York', '-'), Str::slug('Los Angeles', '-'), Str::slug('Chicago', '-')][$i-1],
                'status' => [true, true, false, true, true, true, true, true, true, false][$i-1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
