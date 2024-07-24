<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'order_name' => fake()->word(),
            'order_description' => fake()->text(),
            'amount' =>fake()-> randomNumber(5,false),  //5 is the number of digit for amount and false can this number is 5 or less than 5
            'order_date' =>fake()-> date('y-m-d')
         
        ];
    }
}
