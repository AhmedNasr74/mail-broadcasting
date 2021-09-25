<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RegionFactory extends Factory
{
    protected $model = Region::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'country_id' => function () {
                return Country::inRandomOrder()->first()->id ?? Country::factory()->create()->id;
            },
        ];
    }
}
