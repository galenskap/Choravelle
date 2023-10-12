<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{

    // default values
    private const GROUPS = [
        'Alti',
        'Sopranes 1',
        'Sopranes 2',
        'Ténors',
        'Barytons',
        'Basses',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // pick a random value from the array
            'name' => $this->faker->randomElement(self::GROUPS),
        ];
    }
}
