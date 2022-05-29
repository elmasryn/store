<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NotifyingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pending_orders' => $this->faker->boolean(95),
            'pending_orders_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
            'pending_orders_all' => $this->faker->boolean(95),
            'pending_orders_all_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
            'Bank_transaction_done' => $this->faker->boolean(95),
            'Bank_transaction_done_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
            'Bank_transaction_error' => $this->faker->boolean(95),
            'Bank_transaction_error_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
            'message_recieved' => $this->faker->boolean(95),
            'message_recieved_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
            'message_management_recieved' => $this->faker->boolean(95),
            'message_management_recieved_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
            'product_created' => $this->faker->boolean(95),
            'product_created_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
            'comment_created' => $this->faker->boolean(95),
            'comment_created_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
            'review_created' => $this->faker->boolean(95),
            'review_created_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
            'order_status' => $this->faker->boolean(95),
            'order_status_type' => $this->faker->randomElement([1, 1, 1, 1, 1, 2 , 3]),
        ];
    }

}
