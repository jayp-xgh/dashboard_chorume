<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        $type = $this->faker->randomElement(['individual', 'business']);
        $name = $type === 'individual' ? $this->faker->name : $this->faker->company;

        return [
            "name" => $name,
            "type" => $type,
            "email" => $this->faker->email(),
            "address" => $this->faker->streetAddress(),
            "city" => $this->faker->city(),
            "state" => $this->faker->state(),
            "postal_code" => $this->faker->postcode(),
        ];
    }
}
