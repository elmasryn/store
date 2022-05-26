<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 25; $i++) {
            DB::table('categories')->insert([
                'parent_id' => $i < 9 ? Null : ($i < 16 ? 1 : ($i < 22 ? 2 : ($i < 25 ? 3 : 4))),
                'name' => $i < 9 ? $this->category[$i-1] : ($i < 16 ? $this->category[8][$i-9] : ($i < 22 ? $this->category[9][$i-16] : ($i < 25 ? $this->category[10][$i-22] : 'SubCategory'))),
                'slug' => $i < 9 ? Str::slug($this->category[$i-1], '-') : ($i < 16 ? Str::slug($this->category[8][$i-9], '-') : ($i < 22 ? Str::slug($this->category[9][$i-16], '-') : ($i < 25 ? Str::slug($this->category[10][$i-22], '-') : 'SubCategory'))),
                'desc' => 'That is test description number ' . $i . ' for Category ' . $i . ' That is test description number ' . $i . ' for Category ' . $i,
                'keywords' => 'keywords' . $i . ', keywords' . $i . ', keywords' . $i . ', keywords' . $i . ', keywords' . $i . ', keywords' . $i . ', keywords' . $i,
                'status' => Arr::random([true, true, true, true, false]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    protected $category = [
        'Digitals & Electronics',
        'Fashions & Accessories',
        'Games',
        'Furnitures & Home Decors',
        'Organics & Spa',
        'Tools & Equipments',
        'Kitchen & Appliances',
        'Books',
        ['Computers', 'Smartphones & Taplets', 'Laptops', 'Printers', 'Processors', 'Sound & Speakers', 'Appliances'],
        ['Men\'s Clothes', 'Women\'s Clothes', 'Watches', 'Accessories', 'Bags & Shoes', 'Perfumes'],
        ['Kidtoys', 'General Games', 'Video Games'],
    ];
}
