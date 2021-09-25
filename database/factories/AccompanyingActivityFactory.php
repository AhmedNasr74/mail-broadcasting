<?php

namespace Database\Factories;

use App\Models\AccompanyingActivity;
use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccompanyingActivityFactory extends Factory
{
    protected $model = AccompanyingActivity::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'active'=> true,
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            }
        ];
    }
}
