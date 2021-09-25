<?php

namespace Database\Factories;

use App\Models\AccompanyingActivity;
use App\Models\AccompanyingActivityOption;
use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccompanyingActivityOptionFactory extends Factory
{
    protected $model = AccompanyingActivityOption::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'active' => true,
            'accompanying_activity_id' =>  function () {
                return AccompanyingActivity::inRandomOrder()->first()->id ?? AccompanyingActivity::factory()->create()->id;
            },
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            }
        ];
    }
}
