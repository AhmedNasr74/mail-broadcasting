<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use App\Models\Event;
use App\Models\Region;
use App\Models\Scope;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ScopeFactory extends Factory
{
    protected $model = Scope::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $arr = [
            'adults' => $this->faker->randomNumber(2),
            'youth' => $this->faker->randomNumber(2),
            'children' => $this->faker->randomNumber(2),
        ];
        return [
            'attendees_no' => $this->faker->randomNumber(),
            'type' => $this->faker->word(),
            'location_model' => $this->faker->randomElement([Country::class, Region::class, City::class]),
            'expected_men' => $this->faker->randomNumber(),
            'expected_women' => $this->faker->randomNumber(),
            'audience_age_group' => $arr,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'event_id' => function () {
                return Event::inRandomOrder()->first()->id ?? Event::factory()->create()->id;
            },
        ];
    }
}
