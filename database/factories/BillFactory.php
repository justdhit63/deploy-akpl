<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usage = fake()->numberBetween(10,  100);
        return [
            'date' => now(),
            'usage' => $usage,
            // 'price' => fake()->numberBetween(10000, 100000),
            'price' => $usage * 1000,
            'status' => fake()->randomElement(['pending']),
        ];
    }
}
