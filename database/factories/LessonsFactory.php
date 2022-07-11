<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->numberBetween(1, 200),
            'name' => $this->faker->name(),
            'time' => $this->faker->numerify(),
            'description' => $this->faker->text(),
        ];
    }
}
