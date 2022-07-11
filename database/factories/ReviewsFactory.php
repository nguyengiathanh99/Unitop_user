<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 200),
            'course_id' => $this->faker->numberBetween(1, 200),
            'file_path' => $this->faker->url(),
            'comment' => $this->faker->text(),
            'vote' => $this->faker->numberBetween(1, 5),
        ];
    }
}
