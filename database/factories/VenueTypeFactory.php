<?php

namespace Database\Factories;

use App\Models\EventCategory;
use App\Models\VenueType;
use Illuminate\Database\Eloquent\Factories\Factory;

class VenueTypeFactory extends Factory
{
    protected $model = VenueType::class;

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
            },
        ];
    }
}
