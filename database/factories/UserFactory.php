<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = User::class;

    public function definition()
    {
        return array(
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'image' => $this->faker->imageUrl(),
            'phone' => $this->faker->phoneNumber,
            'role' => $this->faker->numberBetween(1, 2),
            'date_of_birth' => $this->faker->date(),
            'status' => 1,
            'job' => Str::random(3),
            'description' => $this->faker->text,
            'address' => $this->faker->address(),
        );
    }
}
