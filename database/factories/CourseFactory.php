<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cu_code' => fake()->numberBetween(0, 99999),
            'name' => fake()->firstNameMale(),
            'credits' => fake()->numberBetween(0, 10)
        ];
    }
}
//Course = article
