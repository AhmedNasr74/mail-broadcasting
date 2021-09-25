<?php

namespace Database\Factories;

use App\Models\Organizer;
use App\Models\OrganizerProfile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrganizerProfileFactory extends Factory
{
    protected $model = OrganizerProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration_no' => $this->faker->word(),
            'cr_expiry' => Carbon::now(),
            'registered_capital' => $this->faker->randomFloat(),
            'business_activity' => $this->faker->word(),
            'full_time_employees' => $this->faker->randomNumber(),
            'part_time_employees' => $this->faker->randomNumber(),
            'website_url' => $this->faker->url(),
            'social_links' => ['facebook' => $this->faker->url()],
            'about_company' => $this->faker->company(),
            'company_experience' => $this->faker->word(),
            'past_events_experience' => $this->faker->word(),
            'awards_details' => $this->faker->word(),
            'authorized_person' => $this->faker->word(),
            'contact_person' => $this->faker->word(),
            'name' => $this->faker->name(),
            'cr_copy' => $this->faker->word(),
            'address' => $this->faker->address(),
            'fax' => $this->faker->word(),
            'landline' => $this->faker->word(),
            'social_media_account' => ['facebok' => $this->faker->url()],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'organizer_id' => function () {
                return Organizer::inRandomOrder()->first()->id ?? Organizer::factory()->create()->id;
            },
        ];
    }
}
