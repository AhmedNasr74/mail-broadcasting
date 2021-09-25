<?php

namespace Database\Factories;

use App\Models\WorkflowCriteria;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkflowCriteriaFactory extends Factory
{
    protected $model = WorkflowCriteria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
