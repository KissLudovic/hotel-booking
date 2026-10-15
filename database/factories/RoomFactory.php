<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Camera ' . fake()->unique()->numberBetween(100, 399),
            'type' => fake()->randomElement(['single', 'double', 'twin', 'suite', 'penthouse']),
            'capacity' => fake()->numberBetween(1, 4),
            'price_per_night' => fake()->numberBetween(50, 250),
            'currency' => 'EUR',
            'description' => fake()->sentence(),
            // 'is_active' => fake()->boolean(90),
            'is_active' => true,
            'breakfast_includede' => fake()->boolean(),
        ];
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }    
}
