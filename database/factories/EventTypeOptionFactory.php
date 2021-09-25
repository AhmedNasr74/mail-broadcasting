<?php

namespace Database\Factories;

use App\Models\EventCategory;
use App\Models\EventType;
use App\Models\EventTypeOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventTypeOptionFactory extends Factory
{
    protected $model = EventTypeOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'event_type_id' => function () {
                return EventType::inRandomOrder()->first()->id ?? EventType::factory()->create()->id;
            },
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            }
        ];
    }
}
