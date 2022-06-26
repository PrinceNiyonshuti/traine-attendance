<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainee>
 */
class TraineeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'bio' => $this->faker->sentence(7),
            'profile' => $this->faker->imageUrl($width = 200, $height = 200),
            'devStack' => $this->faker->sentence(10),
            'status' => $this->faker->boolean(),
        ];
    }
}
