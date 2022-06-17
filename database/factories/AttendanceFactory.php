<?php

namespace Database\Factories;

use App\Models\Networks;
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
            'network_id' => Networks::all()->random()->id,
            'status' => $this->faker->boolean(),
        ];
    }
}
