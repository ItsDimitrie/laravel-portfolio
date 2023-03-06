<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grades>
 */
class GradesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_id' => Course::factory(\app\models\course::class),
            'test_name' => fake()->company(),
            'weighing_factor' => fake()->numberBetween(0, 10),
            'best_grade' => fake()->numberBetween(0, 10)
        ];
    }
}
// GRADES = USER
