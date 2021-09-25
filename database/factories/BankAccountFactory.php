<?php

namespace Database\Factories;

use App\Models\BankAccount;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankAccountFactory extends Factory
{
    protected $model = BankAccount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'bank_name' => $this->faker->name(),
            'active' => true,
            'bank_account_number' => $this->faker->bankAccountNumber,
            'bank_account_iban' => $this->faker->bankAccountNumber,
        ];
    }
}
