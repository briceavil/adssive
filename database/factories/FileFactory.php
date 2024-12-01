<?php

namespace Database\Factories;

use App\Models\Format;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Files>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tittle' => 'file_' . date('Ymd_His'),
            'original_title' => Fake()->sentence(),
            'format' => Format::factory(),
            'path' => Fake()->url(),
            'is_active' => Fake()->boolean(),
            'user_id' => User::find(random_int(1, 10000)),
        ];
    }
}
