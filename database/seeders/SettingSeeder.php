<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newSetting = Setting::firstOrNew([
            'website_name' => 'Elmasry Store',
            'description' => 'Everything you love about Elmasry store is now on elmasrystore.com. Discover and shop electronics, computers, apparel and accessories, shoes, watches, furniture, home and kitchen goods, beauty and personal care, grocery, baby products, toys and more. Enjoy great deals, cash on delivery and hassle-free returns.',
            'keywords' => 'store, elmasrystore.com, Elmasry store, Elmasry, electronics, accessories, shoes, watches',
            'email' => 'admin@test.com',
            'website_message' => 'The web site closed temporary for maintenance',
            'comment_message' => 'comments will be available soon, thank you',
            'review_message' => 'reviews will be available soon, thank you',
            'tax' => 14.00,
            'ship_price_free_start' => 500.00,
            'ship_price_local' => 10.00,
            'ship_price_city' => 50.00,
            'img' => 'favicon.ico',
        ]);
        $newSetting->save();
    }
}
