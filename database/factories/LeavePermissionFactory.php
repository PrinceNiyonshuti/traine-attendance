<?php

namespace Database\Factories;

use App\Models\Leave;
use App\Models\Trainee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LeavePermission>
 */
class LeavePermissionFactory extends Factory
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
            'leave_id' => Leave::all()->random()->id,
            'briefing' => $this->faker->sentence(7),
            'comment' => $this->faker->sentence(7),
            'leaveStatus' => $this->faker->boolean(),
        ];
    }
}
