<?php

namespace Database\Factories;

use App\Enums\WorkflowConditionEnum;
use App\Models\RegulatorWorkflow;
use App\Models\RegulatorWorkflowCondition;
use App\Models\WorkflowCriteria;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegulatorWorkflowConditionFactory extends Factory
{
    protected $model = RegulatorWorkflowCondition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(WorkflowConditionEnum::all()),
            'notes' => $this->faker->sentence(),
            'criteria_value' => $this->faker->word(),

            'regulator_workflow_id' => function () {
                return RegulatorWorkflow::inRandomOrder()->first()->id ?? RegulatorWorkflow::factory()->create()->id;
            },
            'criteria_id' => function () {
                return WorkflowCriteria::inRandomOrder()->first()->id ?? WorkflowCriteria::factory()->create()->id;
            },
        ];
    }
}
