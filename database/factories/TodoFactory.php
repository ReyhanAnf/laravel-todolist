<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'task' => fake()->sentence(),
            'description' => fake()->sentence(15),
            'status' => ['pending','progress', 'done', 'skip'][rand(0,3)],
            'priority' => rand(1,6),
            'due_date' => fake()->date(max:''),
            'tags' => fake()->sentence(1)
        ];
    }
}
