<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Event;
use App\Models\Influencer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class InfluencerFactory extends Factory
{
    protected $model = Influencer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'role' => $this->faker->word(),
            'identity_number' => $this->faker->word(),
            'social_media' => $this->faker->words(),
            'created_at' => Carbon::now(),
            'country_id' => function () {
                return Country::inRandomOrder()->first()->id?? Country::factory()->create()->id;
            },
            'event_id' => function () {
                return Event::inRandomOrder()->first()->id?? Event::factory()->create()->id;
            },
        ];
    }
}
