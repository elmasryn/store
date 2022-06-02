<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 68; $i++) {

            $offer = Arr::random([now(), now()->addDays(1), now()->addDays(2), now()->addDays(3), Null, Null, Null, Null, Null]);
            $offerEnd = $offer != Null ? Arr::random([now()->addDays(4), now()->addDays(5), now()->addDays(6), now()->addDays(10), Null, Null, Null, Null, Null]) : Null;
            $user = User::role('vendor')->pluck('id');
            $userId = $user->random();

            DB::table('products')->insert([
                'user_id' => $userId ?? 1,
                'country_id' => $i < 6 ? 1 : ($i < 11 ? 2 : ($i < 16 ? 3 : ($i < 21 ? Null : rand(1, 5)))),
                'city_id' => $i < 3 ? 1 : ($i == 6 ? 4 : ($i == 18 ? 7 : ($i == 20 ? 10 : Null))),
                'brand_id' => $i == 3 ? 1 : ($i == 6 ? 4 : ($i == 10 ? 7 : ($i == 19 ? 10 : Null))),
                'name' => $this->productName[$i - 1],
                'slug' => Str::slug($this->productName[$i - 1], '-'),
                'desc' => ' here in Product ' . $i . ' Everything you love about Elmasry store is now on elmasrystore.com. Discover and shop electronics, computers, apparel and accessories, shoes, watches, furniture, home and kitchen goods, beauty and personal care, grocery, baby products, toys and more. Enjoy great deals, cash on delivery and hassle-free returns.',
                'keywords' => 'Product store ' . $i . ', elmasrystore.com, Elmasry store, Elmasry, electronics, accessories, shoes, watches',
                'product_number' =>  Str::random(30),
                'sku' => strtoupper(Str::random(12)),
                'stock' => rand(0, 10),
                'price' => rand(35, 1000),
                'end_at' => Arr::random([now(), now()->addDays(1), now()->addDays(5), now()->addDays(10), now()->addDays(100), now()->addMonth(10), now()->addMonth(100), Null, Null]),
                'offer_sale' => Arr::random([30, Null, Null, Null, Null, Null, Null, Null]),
                'discount' => Arr::random([25, Null, Null, Null, Null, Null, Null, Null]),
                'offer_percent' => Arr::random([1, 2, 10, 25, Null, Null, Null, Null, Null, Null, Null, Null]),
                'start_offer_at' => $offer,
                'end_offer_at' => $offerEnd,
                'offer_status' => Arr::random([true, false, false, false, false]),
                'views' => rand(0, 35),
                'featured' => Arr::random([true, false, false, false, false]),
                'ship_source' => Arr::random([1, 1, 1, 1, 1, 2, Null]),
                'free_ship_price_start' => Arr::random([500, 650, 800, 1000, Null, Null, Null, Null, Null, Null, Null, Null]),
                'local_ship_price' => Arr::random([10, 15, 20, 25, Null, Null, Null, Null, Null, Null, Null, Null]),
                'city_ship_price' => Arr::random([30, 35, 40, 45, Null, Null, Null, Null, Null, Null, Null, Null]),
                'published_at' => Arr::random([now(), now(), now(), now(), now(), Null]),
                'rejected_at' => Arr::random([now(), Null, Null, Null, Null, Null, Null, Null, Null]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }

    protected $product = [
        'digital_01', 'digital_02', 'digital_03', 'digital_04', 'digital_05', 'digital_06', 'digital_07', 'digital_08', 'digital_09', 'digital_10', 'digital_11', 'digital_12', 'digital_13', 'digital_14', 'digital_15', 'digital_16', 'digital_17', 'digital_18', 'digital_19', 'digital_20', 'digital_21', 'digital_22', 'fashion_01', 'fashion_02', 'fashion_03', 'fashion_04', 'fashion_05', 'fashion_06', 'fashion_07', 'fashion_08', 'fashion_09', 'fashion_10', 'furniture_01', 'furniture_02', 'furniture_03', 'furniture_04', 'furniture_05', 'furniture_06', 'furniture_07', 'furniture_08', 'furniture_09', 'kidtoy_01', 'kidtoy_02', 'kidtoy_03', 'kidtoy_04', 'kidtoy_05', 'kidtoy_06', 'kidtoy_07', 'kidtoy_08', 'kidtoy_09', 'kidtoy_10', 'organics_spa_1', 'organics_spa_2', 'organics_spa_3', 'organics_spa_4', 'organics_spa_5', 'organics_spa_6', 'organics_spa_7', 'organics_spa_8', 'tools_equipment_1', 'tools_equipment_2', 'tools_equipment_3', 'tools_equipment_4', 'tools_equipment_5', 'tools_equipment_6', 'tools_equipment_7', 'tools_equipment_8'
    ];

    protected $productName = [
        'galaxy s4', 'galaxy s5', 'radio', 'laptop inspire 150', 'oppo 10', 'camera s8', 'camera d7', 'screen s552', 'screen s553', 'paystation jec', 'watch d152', 'watch d155', 'headset g5', 'laptop d6', 'cycle t10', 'alarm black', 'digital v17', 'play jec f5', 'screen d226', 'screen d228', 'iphone 8', 'grap 9', 'watch c2', 'black bag', 'mini trousers', 'watch z552', 'shoes nike', 'fashion d06', 'tshirt 07', 'bag light', 'jense shirt', 'boot', 'pc desk', 'abajora', 'table', 'chair', 'armchair', 'bed', 'bed abajora', 'computer desk', 'chair d5', 'monkey toy', 'rubber toy', 'car toy', 'dug toy', 'snake toy', 'purple toy', 'bycycle toy', 'seatools toy', 'green toy', 'recorder toy', 'organics_spa_1', 'greeps', 'soap', 'organics_spa_4', 'organics_spa_5', 'organics_spa_6', 'organics_spa_7', 'organics_spa_8', 'tools_equipment_1', 'tools_equipment_2', 'tools_equipment_3', 'tools_equipment_4', 'tools_equipment_5', 'tools_equipment_6', 'tools_equipment_7', 'tools_equipment_8'
    ];
}
