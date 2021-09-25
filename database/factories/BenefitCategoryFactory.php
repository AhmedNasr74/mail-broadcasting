<?php

namespace Database\Factories;

use App\Models\BenefitCategory;
use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class BenefitCategoryFactory extends Factory
{
    protected $model = BenefitCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'active' => true,
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            },
        ];
    }
}
