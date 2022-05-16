<?php

namespace Database\Factories;

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
            'trainee_id' => $this->faker->random_int(),
            'leave_id' => $this->faker->random_int(),
            'briefing' => $this->faker->sentence(7),
            'comment' => $this->faker->sentence(7),
            'leaveStatus' => $this->faker->boolean(),
        ];
    }
}
