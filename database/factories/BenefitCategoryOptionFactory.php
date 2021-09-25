<?php

namespace Database\Factories;

use App\Models\BenefitCategoryOption;
use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class BenefitCategoryOptionFactory extends Factory
{
    protected $model = BenefitCategoryOption::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'active' => true,
            'benefit_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            },
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            }
        ];
    }
}
