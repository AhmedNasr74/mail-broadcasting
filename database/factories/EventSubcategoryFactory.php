<?php

namespace Database\Factories;

use App\Models\EventCategory;
use App\Models\EventSubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventSubcategoryFactory extends Factory
{
    protected $model = EventSubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            },
        ];
    }
}
