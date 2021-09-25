<?php

namespace Database\Factories;

use App\Models\Sponsor;
use App\Models\SponsorProfileUpdate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SponsorProfileUpdateFactory extends Factory
{
    protected $model = SponsorProfileUpdate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration_no' => $this->faker->word,
            'cr_expiry' => Carbon::now(),
            'registered_capital' => $this->faker->randomFloat(),
            'business_activity' => $this->faker->word,
            'full_time_employees' => $this->faker->randomNumber(),
            'part_time_employees' => $this->faker->randomNumber(),
            'website_url' => $this->faker->url,
            'social_links' => $this->faker->words(),
            'about_company' => $this->faker->company,
            'company_experience' => $this->faker->word,
            'past_events_experience' => $this->faker->word,
            'awards_details' => $this->faker->word,
            'authorized_person' => $this->faker->word,
            'contact_person' => $this->faker->word,
            'name' => $this->faker->name,
            'cr_copy' => $this->faker->word,
            'address' => $this->faker->address,
            'fax' => $this->faker->word,
            'landline' => $this->faker->word,
            'social_media_account' => $this->faker->word,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'sponsor_id' => function () {
                return Sponsor::factory()->create()->id;
            },
        ];
    }
}
