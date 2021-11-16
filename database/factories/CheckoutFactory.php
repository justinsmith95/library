<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CheckoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'checked_out_at' => $this->faker->dateTime($max = 'now')
        ];
    }
}
