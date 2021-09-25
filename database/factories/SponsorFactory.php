<?php

namespace Database\Factories;

use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SponsorFactory extends Factory
{
    protected $model = Sponsor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_type' => $this->faker->randomElement(['Company' , 'Government' , 'Individual' , 'Non-Profit']),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => 'password',
            'phone' => $this->faker->phoneNumber(),
            'position' => $this->faker->word(),
            'registed_account_notes' => $this->faker->word(),
            'initial_sponsor_index_number' => $this->faker->randomFloat(2,0,100),
            'verification_code' => $this->faker->word(),
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ];
    }
}
