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
        'digital_01.jpg', 'digital_02.jpg', 'digital_03.jpg', 'digital_04.jpg', 'digital_05.jpg', 'digital_06.jpg', 'digital_07.jpg', 'digital_08.jpg', 'digital_09.jpg', 'digital_10.jpg', 'digital_11.jpg', 'digital_12.jpg', 'digital_13.jpg', 'digital_14.jpg', 'digital_15.jpg', 'digital_16.jpg', 'digital_17.jpg', 'digital_18.jpg', 'digital_19.jpg', 'digital_20.jpg', 'digital_21.jpg', 'digital_22.jpg', 'fashion_01.jpg', 'fashion_02.jpg', 'fashion_03.jpg', 'fashion_04.jpg', 'fashion_05.jpg', 'fashion_06.jpg', 'fashion_07.jpg', 'fashion_08.jpg', 'fashion_09.jpg', 'fashion_10.jpg', 'furniture_01.jpg', 'furniture_02.jpg', 'furniture_03.jpg', 'furniture_04.jpg', 'furniture_05.jpg', 'furniture_06.jpg', 'furniture_07.jpg', 'furniture_08.jpg', 'furniture_09.jpg', 'kidtoy_01.jpg', 'kidtoy_02.jpg', 'kidtoy_03.jpg', 'kidtoy_04.jpg', 'kidtoy_05.jpg', 'kidtoy_06.jpg', 'kidtoy_07.jpg', 'kidtoy_08.jpg', 'kidtoy_09.jpg', 'kidtoy_10.jpg', 'organics_spa_1.jpg', 'organics_spa_2.jpg', 'organics_spa_3.jpg', 'organics_spa_4.jpg', 'organics_spa_5.jpg', 'organics_spa_6.jpg', 'organics_spa_7.jpg', 'organics_spa_8.jpg', 'tools_equipment_1.jpg', 'tools_equipment_2.jpg', 'tools_equipment_3.jpg', 'tools_equipment_4.jpg', 'tools_equipment_5.jpg', 'tools_equipment_6.jpg', 'tools_equipment_7.jpg', 'tools_equipment_8.jpg',
    ];
}
