<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    public function definition(): array
    {
        $status = $this->faker->randomElement(['Billable', 'Paid', 'Void']);

        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->numberBetween(100, 20000),
            'status' => $status,
            'billing_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $status === 'Paid' ? $this->faker->dateTimeThisDecade() : NULL,
        ];
    }
}
