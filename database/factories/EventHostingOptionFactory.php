<?php

namespace Database\Factories;

use App\Models\EventCategory;
use App\Models\EventHosting;
use App\Models\EventHostingOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventHostingOptionFactory extends Factory
{
    protected $model = EventHostingOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'active' => true,
            'event_hosting_id' => function () {
                return EventHosting::inRandomOrder()->first()->id ?? EventHosting::factory()->create()->id;
            },
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            }
        ];
    }
}
