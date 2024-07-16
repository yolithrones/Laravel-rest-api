<?php

namespace Database\Factories;

use App\Models\Invoices;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['Billed', 'Paid', 'Void']);
        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->numberBetween(500, 50000),
            'status' => $status,
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'paid_date'   => $status == 'Paid' ? $this->faker->dateTimeThisDecade() : NULL
        ];
    }
}
