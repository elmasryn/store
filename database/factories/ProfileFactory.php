<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()  
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $first_name = $this->faker->name($gender);
        $last_name = $this->faker->lastName();
        $company = $this->faker->company();
        $mobile = $this->faker->biasedNumberBetween(1021115544, 1221115544);
        $about = $this->faker->paragraph();
        $country = $this->faker->country();
        $city = $this->faker->city();
        $address = $this->faker->address();
        $lat = $this->faker->latitude();
        $long = $this->faker->longitude();
        $imgArray = $this->faker->randomElement(['man1.jpg', 'man2.jpg', 'man3.jpg', 'man4.jpg', 'man5.jpg', 'man6.jpg', 'man7.jpg', 'man8.jpg', 'man9.jpg', 'man10.jpg', 'man11.jpg', 'man12.jpg', 'man13.jpg']);
        return [
            'first_name' => $this->faker->randomElement([$first_name, Null, Null]),
            'last_name' => $this->faker->randomElement([$last_name, Null, Null]),
            'company_name' => $this->faker->randomElement([$company, Null, Null, Null]),
            'code' => $this->faker->randomElement(['+020', '+0966', '+10', Null, Null]),
            'mobile' => $this->faker->randomElement([$mobile, Null, Null]),
            'gender' => $this->faker->randomElement([$gender == 'male' ? 1 : 2, Null, Null]),
            'about' => $this->faker->randomElement([$about, Null, Null]),
            'country' => $this->faker->randomElement([$country , 'Egypt', Null, Null]),
            'city' => $this->faker->randomElement([$city , 'cairo', Null, Null]),
            'address' => $this->faker->randomElement([$address , Null, Null, Null]),
            'map' => $this->faker->boolean(10),
            'lat' => $this->faker->randomElement([$lat , Null, Null]),
            'long' => $this->faker->randomElement([$long , Null, Null, Null]),
            'img' => $this->faker->randomElement([$imgArray , Null, Null]),
        ];
    }
}
