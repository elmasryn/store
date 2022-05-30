<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('brands')->insert([
                'name' => ['Addidas', 'Nike', 'GAP', 'Dell', 'Samsung', 'Apple', 'Toshiba', 'Lenovo', 'Acer', 'Oppo'][$i-1],
                'slug' => [Str::slug('Addidas', '-'), Str::slug('Nike', '-'), Str::slug('GAP', '-'), Str::slug('Dell', '-'), Str::slug('Samsung', '-'), Str::slug('Apple', '-'), Str::slug('Toshiba', '-'), Str::slug('Lenovo', '-'), Str::slug('Acer', '-'), Str::slug('Oppo', '-')][$i-1],
                'desc' => ' here in Brand '.$i. ' Everything you love about Elmasry store is now on elmasrystore.com. Discover and shop electronics, computers, apparel and accessories, shoes, watches, furniture, home and kitchen goods, beauty and personal care, grocery, baby products, toys and more. Enjoy great deals, cash on delivery and hassle-free returns.',
                'keywords' => 'Brand store '.$i. ', elmasrystore.com, Elmasry store, Elmasry, electronics, accessories, shoes, watches',
                'img' => ['addidas.png', 'nike.png', 'gap.png', 'dell.png', 'samsung.png', 'apple.png', 'toshiba.png', 'lenovo.png', 'acer.png', 'oppo.png'][$i-1],
                'status' => Arr::random([true, true, true, true, false]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

}
