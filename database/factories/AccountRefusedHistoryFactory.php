<?php

namespace Database\Factories;

use App\Enums\AccountHistoryType;
use App\Models\AccountRefusedHistory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AccountRefusedHistoryFactory extends Factory
{
    protected $model = AccountRefusedHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'entity_type' => $this->faker->randomElement(AccountHistoryType::all()),
            'email' => $this->faker->unique()->safeEmail(),
            'base_info' => $this->faker->words(),
            'profile_info' => $this->faker->words(),
            'notes' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
