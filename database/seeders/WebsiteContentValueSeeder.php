<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteContentValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_content_values')->insert([
            'website_content_area_id' => 1,
            'name' => 'first, second, third',
            'url' => url('product/3') . ', ' . url('product/4'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 2,
            'url' => url('product/1') . ', ' . url('product/2'),
            'img' => 'home-1-banner-1.jpg, home-1-banner-2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 3,
            'name' => '42 Grand Central Terminal New York,NY 1017 UnitedState USA ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 4,
            'name' => '(+123) 456 789 - (+123) 666 888',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 5,
            'name' => 'Contact@yourcompany.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 6,
            'name' => 'Our Account',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 7,
            'name' => 'Infomations',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 8,
            'name' => 'Our Account, Gift Certificates, Brands, Affiliates, Wish list, Fast delivery',
            'url' => url('product/5') . ', ' . url('product/6') . ', ' . url('product/7') . ', ' . url('product/8') . ', ' . url('product/9') . ', ' . url('product/10'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 9,
            'name' => 'Contact Us, Site Map, Returns, Specials, Order History, Cart',
            'url' => url('product/11') . ', ' . url('product/12') . ', ' . url('product/13') . ', ' . url('product/14') . ', ' . url('product/15') . ', ' . url('product/16'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 10,
            'name' => 'Quick Links',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 11,
            'name' => 'Mobiles',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 12,
            'name' => 'Tablets',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('website_content_values')->insert([
            'website_content_area_id' => 13,
            'name' => 'Fashion',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('website_content_values')->insert([
            'website_content_area_id' => 14,
            'name' => 'Mobiles, YPhones, Gianee Mobiles GL, Mobiles Karbonn, Mobiles Viva, Mobiles Intex, Mobiles Micrumex, Mobiles Bsus, Mobiles Samsung, Mobiles Lenovo',
            'url' => url('product/17') . ', ' . url('product/18') . ', ' . url('product/19') . ', ' . url('product/20') . ', ' . url('product/21') . ', ' . url('product/22') . ', ' . url('product/23') . ', ' . url('product/24') . ', ' . url('product/25') . ', ' . url('product/26'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('website_content_values')->insert([
            'website_content_area_id' => 15,
            'name' => 'Plesc YPads, Samsyng Tablets, Qindows Tablets, Calling Tablets, Micrumex Tablets, Lenova Tablets, Tablets iBall, Tablets Swipe, Tablets TVs',
            'url' => url('product/27') . ', ' . url('product/28') . ', ' . url('product/29') . ', ' . url('product/30') . ', ' . url('product/31') . ', ' . url('product/32') . ', ' . url('product/33') . ', ' . url('product/34') . ', ' . url('product/35'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('website_content_values')->insert([
            'website_content_area_id' => 16,
            'name' => 'Sarees Silk, sarees Salwar, Suits Lehengas, Biba Jewellery, Rings Earrings, Diamond Rings, Loose Diamond Shoes, BootsMen Watches, Women Watches',
            'url' => url('product/36') . ', ' . url('product/37') . ', ' . url('product/38') . ', ' . url('product/39') . ', ' . url('product/40') . ', ' . url('product/41') . ', ' . url('product/42') . ', ' . url('product/43') . ', ' . url('product/44'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('website_content_values')->insert([
            'website_content_area_id' => 17,
            'name' => 'twitter, facebook, pinterest, instagram, vimeo',
            'url' => 'http://twitter.com, http://facebook.com, http://pinterest.com, http://instagram.com, http://vimeo.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
