<?php

namespace Database\Factories;

use App\Models\EventCategory;
use App\Models\EventSubcategory;
use App\Models\Regulator;
use App\Models\RegulatorWorkflow;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegulatorWorkflowFactory extends Factory
{
    protected $model = RegulatorWorkflow::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'regulator_id' => function () {
                return Regulator::inRandomOrder()->first()->id ?? Regulator::factory()->create()->id;
            },
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            },
            'event_subcategory_id' => function () {
                return EventSubcategory::inRandomOrder()->first()->id ?? EventSubcategory::factory()->create()->id;
            },
        ];
    }
}
