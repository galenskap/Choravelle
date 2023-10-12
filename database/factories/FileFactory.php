<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
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
            'filename' => $this->faker->word().'.mp3',
            'title' => $this->faker->sentence(),
            'type' => $this->faker->randomElement([
                'audio',
                'video',
                'lyrics',
            ]),
            'song_id' => $this->faker->randomElement([
                1,
                2,
                3,
                4,
                5,
            ]),
        ];
    }
}
