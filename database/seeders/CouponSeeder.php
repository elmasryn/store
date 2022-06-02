<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            $user = User::role('vendor')->pluck('id');
            $userId = $user->random();
            $productId = Product::where('user_id', $userId)->pluck('id')->first();

            DB::table('coupons')->insert([
                'user_id' => $userId ?? 1,
                'product_id' => $productId ?? 1,
                'name' => Str::random(7),
                'target' => Arr::random([Null, Null, 200, 500]),
                'type' => Arr::random([true, true, false, false]),
                'value' => Arr::random([5, 10, 20, 50]),
                'status' => Arr::random([true, true, true, false]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
