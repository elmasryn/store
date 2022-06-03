<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {

            $user = User::role('shipper')->pluck('id');
            $userId = $user->random();

            DB::table('shippings')->insert([
                'user_id' => $userId ?? 5,
                'order_id' => $i,
                'shipping_number' =>  Str::random(30),
                'published_at' =>[now()->addMinutes(140), now()->addMinutes(150), now()->addMinutes(160), Null][$i-1],
                'rejected_at' => [Null, Null, Null, now()->addMinutes(170)][$i-1],
                'rejected_reason' => [Null, Null, Null, 'rejected just for test'][$i-1],
                'deliverd_at' => [now()->addMinutes(180), now()->addMinutes(190), Null, Null][$i-1],
                'completed_at' => [now()->addMinutes(200), Null, Null, Null][$i-1],
                'created_at' => now()->addMinutes(135),
                'updated_at' => now()->addMinutes(135),
            ]);
        }
    }
}
