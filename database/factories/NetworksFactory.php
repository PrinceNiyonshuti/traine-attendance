<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Networks>
 */
class NetworksFactory extends Factory
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
            'networkName' => $this->faker->firstName(),
            'networkAddress' => $this->faker->ipv4(),
            'networkStatus' => $this->faker->boolean(),
        ];
    }
}
