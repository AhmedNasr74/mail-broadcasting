<?php

namespace Database\Factories;

use App\Models\Criteria;
use App\Models\Icp;
use App\Models\IcpCriteria;
use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class IcpCriteriaFactory extends Factory
{
    protected $model = IcpCriteria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'icp_id' => Icp::inRandomOrder()->first()->id ?? Icp::factory()->create()->id,
            'criteria_id' => Criteria::inRandomOrder()->first()->id ?? Criteria::factory()->create()->id,
            'priority_index' => $this->faker->numberBetween(0,100),
            'must_index' => $this->faker->boolean(),
            'criteria_value' => $this->faker->words(),
            'json_key' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
