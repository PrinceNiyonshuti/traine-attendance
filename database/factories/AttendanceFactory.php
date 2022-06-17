<?php

namespace Database\Factories;

use App\Models\Trainee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'trainee_id' => Trainee::all()->random()->id,
            'network_id' => $this->faker->randomDigit(),
            'status' => $this->faker->boolean(),
        ];
    }
}
