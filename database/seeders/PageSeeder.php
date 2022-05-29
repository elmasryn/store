<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 11; $i++){
            DB::table('pages')->insert([
            'user_id' => rand(1,3),
            'name' => ['about us', 'do you need help', 'learn more about Elmasry store', 'how to buy the cheapest product', 'suggestion', 'complaint', 'share your ideas', 'tell friends', 'suggest category', 'suggest page'][$i-1],
            'slug' => [Str::slug('about us', '-'), Str::slug('do you need help', '-'), Str::slug('learn more about Elmasry store', '-'), Str::slug('how to buy the cheapest product', '-'), Str::slug('suggestion', '-'), Str::slug('complaint', '-'), Str::slug('share your ideas', '-'), Str::slug('tell friends', '-'), Str::slug('suggest category', '-'), Str::slug('suggest page', '-')][$i-1],
            'body' => 'That is test body text for Page number'.$i.' That is test body text for Page number'.$i.' That is test body text for Page number'.$i.' That is test body text for Page number'.$i.' That is test body text for Page number'.$i.' That is test body text for Page number'.$i,
            'desc' => ' here in Page '.$i. ' Everything you love about Elmasry store is now on elmasrystore.com. Discover and shop electronics, computers, apparel and accessories, shoes, watches, furniture, home and kitchen goods, beauty and personal care, grocery, baby products, toys and more. Enjoy great deals, cash on delivery and hassle-free returns.',
            'keywords' => 'page store '.$i. ', elmasrystore.com, Elmasry store, Elmasry, electronics, accessories, shoes, watches',
            'images' => 'blog-article-1.jpg,blog-article-2.jpg,blog-article-3.jpg,blog-article-4.jpg',
            'published_at' => Arr::random([now(), now(), now(), now(), Null, Null]),
            'created_at' => now(),
            'updated_at' => now(),
            ]);
        }
    }
}
