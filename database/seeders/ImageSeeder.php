<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 68; $i++) {
            DB::table('images')->insert([
                'product_id' => $i,
                'name' => $this->product[$i - 1],
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 1; $i < 14; $i++) {
            DB::table('images')->insert([
                'product_id' => $i < 7 ? 1 : 2,
                'name' => $this->product[$i + 1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    protected $product = [
        'digital_01', 'digital_02', 'digital_03', 'digital_04', 'digital_05', 'digital_06', 'digital_07', 'digital_08', 'digital_09', 'digital_10', 'digital_11', 'digital_12', 'digital_13', 'digital_14', 'digital_15', 'digital_16', 'digital_17', 'digital_18', 'digital_19', 'digital_20', 'digital_21', 'digital_22', 'fashion_01', 'fashion_02', 'fashion_03', 'fashion_04', 'fashion_05', 'fashion_06', 'fashion_07', 'fashion_08', 'fashion_09', 'fashion_10', 'furniture_01', 'furniture_02', 'furniture_03', 'furniture_04', 'furniture_05', 'furniture_06', 'furniture_07', 'furniture_08', 'furniture_09', 'kidtoy_01', 'kidtoy_02', 'kidtoy_03', 'kidtoy_04', 'kidtoy_05', 'kidtoy_06', 'kidtoy_07', 'kidtoy_08', 'kidtoy_09', 'kidtoy_10', 'organics_spa_1', 'organics_spa_2', 'organics_spa_3', 'organics_spa_4', 'organics_spa_5', 'organics_spa_6', 'organics_spa_7', 'organics_spa_8', 'tools_equipment_1', 'tools_equipment_2', 'tools_equipment_3', 'tools_equipment_4', 'tools_equipment_5', 'tools_equipment_6', 'tools_equipment_7', 'tools_equipment_8'
    ];
}
