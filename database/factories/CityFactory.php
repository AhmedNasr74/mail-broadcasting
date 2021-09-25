<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CityFactory extends Factory
{
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'country_id' => function () {
                return Country::inRandomOrder()->first()->id ?? Country::factory()->create()->id;
            },
            'region_id' => function () {
                return Region::inRandomOrder()->first()->id ?? Region::factory()->create()->id;
            },
        ];
    }
}
