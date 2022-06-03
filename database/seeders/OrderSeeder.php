<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {

            $user = User::role('user')->pluck('id');
            $userId = $user->random();

            DB::table('orders')->insert([
                'user_id' => $userId ?? 6,
                'coupon_id' => Arr::random([1, 2, Null, Null, Null]),
                'order_number' =>  Str::random(30),
                'billing_first_name' => Arr::random(['Ali', 'Ahmed', 'Mohamed', 'Mahmoud', 'Ebrahim', 'Mostafa', 'Anwar', 'Osama']),
                'billing_last_name' => Arr::random(['Eltkawy', 'Morshed', 'Rshad', 'fahmy', 'Eltweel', 'Elamer', 'Elmasry', 'Abbas']),
                'billing_email' => Arr::random(['asf@jkl.com', 'asd@jkl.com', 'asz@jkl.com', 'asx@jkl.com', 'asc@jkl.com', 'asv@jkl.com', 'asn@jkl.com', 'asm@jkl.com']),
                'billing_mobile' => rand(1034567895, 1234567895),
                'billing_phone' => rand(23456789, 32456789),
                'billing_country' => rand(1, 50),
                'billing_government' => rand(1, 50),
                'billing_city' => rand(1, 50),
                'billing_address' => '5984 Jany Ramp Suite 164 East Buddy, KY 57538',
                'billing_code' => '5984',
                'lat' => ['54.922919', '-20.358658', '-9.325557', '-59.469981', Null, Null, Null, Null, Null, Null][$i-1],
                'long' => ['54.-122.570751', '106.466524', '-35.440442', '69.418999', Null, Null, Null, Null, Null, Null][$i-1],
                'note' => Arr::random(['I want it ASAP', Null, Null]),
                'payment_method' => Arr::random([1, 2, Null, Null, Null, Null, Null, Null]),
                'subtotal' => Arr::random([190, 290, 400, 450, 660, 850, 990, 1200, 1400, 1900, 2500, 3600]),
                'total' => Arr::random([190, 290, 400, 450, 660, 850, 990, 1200, 1400, 1900, 2500, 3600]),
                'published_at' => Arr::random([now()->addMinutes(70), now()->addMinutes(80), now()->addMinutes(90), now()->addMinutes(100), now()->addMinutes(110), Null]),
                'rejected_at' => Arr::random([now()->addMinutes(120), Null, Null, Null, Null, Null, Null, Null, Null]),
                'completed_at' => Arr::random([now()->addMinutes(130), Null, Null, Null, Null, Null, Null, Null, Null]),
                'created_at' => now()->addMinutes(65),
                'updated_at' => now()->addMinutes(65),
            ]);
        }
    }
}
