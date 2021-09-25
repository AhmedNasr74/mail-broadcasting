<?php

namespace Database\Factories;

use App\Models\EventCategory;
use App\Models\PatronageType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatronageTypeFactory extends Factory
{
    protected $model = PatronageType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'active' => true,
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            },

        ];
    }
}
