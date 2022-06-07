<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RoleSeeder::class);

        // create users with (profile + notifyings) and assign roles to them
        $user = User::factory()
            ->hasProfile()
            ->hasNotifying()
            ->create([
                'name' => 'admin',
                'email' => 'admin@test.com',
            ]);
        $user->assignRole('super-admin');

        $user = User::factory()
            ->hasProfile()
            ->hasNotifying()
            ->create([
                'name' => 'admin2',
                'email' => 'admin2@test.com',
            ]);
        $user->assignRole('admin');

        $user = User::factory()
            ->hasProfile()
            ->hasNotifying()
            ->create([
                'name' => 'supervisor',
                'email' => 'supervisor@test.com',
            ]);
        $user->assignRole('supervisor');

        $user = User::factory()
            ->hasProfile()
            ->hasNotifying()
            ->create([
                'name' => 'vendor',
                'email' => 'vendor@test.com',
            ]);
        $user->assignRole('vendor');

        $user = User::factory()
            ->hasProfile()
            ->hasNotifying()
            ->create([
                'name' => 'shipper',
                'email' => 'shipper@test.com',
            ]);
        $user->assignRole('shipper');

        $user = User::factory()
            ->hasProfile()
            ->hasNotifying()
            ->create([
                'name' => 'user',
                'email' => 'user@test.com',
            ]);
        $user->assignRole('user');

        for ($i = 1; $i < 11; $i++) {
            $user = User::factory()
            ->hasProfile()
            ->hasNotifying()
            ->create();
            $userRole = Arr::random(['user', 'user', 'user', 'user', 'user', 'supervisor', 'vendor', 'shipper']);
                $user->assignRole($userRole);
        }

        $this->call([
            CategorySeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            SettingSeeder::class,
            PageSeeder::class,
            BrandSeeder::class,
            TagSeeder::class,
            ProductSeeder::class,
            OptionSeeder::class,
            OptionValueSeeder::class,
            CategoryProductSeeder::class,
            ProductTagSeeder::class,
            CouponSeeder::class,
            OrderSeeder::class,
            OrderProductSeeder::class,
            ImageSeeder::class,
            ShippingSeeder::class,
            CommentSeeder::class,
            ReviewSeeder::class,
            SliderSeeder::class,
            WishListSeeder::class,
        ]);
    }
}
