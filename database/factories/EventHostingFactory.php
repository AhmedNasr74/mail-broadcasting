<?php

namespace Database\Factories;

use App\Models\EventCategory;
use App\Models\EventHosting;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventHostingFactory extends Factory
{
    protected $model = EventHosting::class;

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
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            }];
    }
}
