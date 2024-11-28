<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formats>
 */
class FormatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'format_name' => fake()->fileExtension(),
            'mime_type' => fake()->mimeType(),
            'description' => fake()->sentence(),
            'is_active' => fake()->boolean()
        ];
    }
}
