<?php

namespace Database\Factories;

use App\Enums\AccountType;
use App\Enums\ProfileStatus;
use App\Models\Organizer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizerFactory extends Factory
{
    protected $model = Organizer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_type' => $this->faker->randomElement(AccountType::all()),
            'first_name' => $this->faker->word(),
            'last_name' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => 'password',
            'account_status' => $this->faker->randomElement(ProfileStatus::all()),
            'national_id' => $this->faker->uuid(),
            'initial_organizer_index_number' => $this->faker->randomFloat(2,0,100),
            'registed_account_notes' => $this->faker->text(),
            'verification_code' => null,
            'email_verified_at' => now(),
            'phone' => $this->faker->phoneNumber(),
            'position' => $this->faker->word(),
        ];
    }
}
