<?php

namespace Database\Factories;

use App\Models\Criteria;
use Illuminate\Database\Eloquent\Factories\Factory;

class CriteriaFactory extends Factory
{
    protected $model = Criteria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $randomCriteria = Criteria::inRandomOrder()->first();

        return [
            'name' => $randomCriteria->name ?? $this->faker->name(),
            'relation_func_name' => $randomCriteria->relation_func_name ?? $this->faker->name(),
            'filter_column_name' => $randomCriteria->filter_column_name ?? $this->faker->name(),
            'relation_level' => $randomCriteria->relation_level ?? $this->faker->randomElement([0,1,2]),
            'is_json' => $randomCriteria->relation_level ?? $this->faker->boolean(),
        ];
    }
}
