<?php

namespace Database\Factories;

use App\Models\AwardType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AwardTypeFactory extends Factory
{
    protected $model = AwardType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'active' => true,

            'event_category_id' => function () {
                return AwardType::inRandomOrder()->first()->id ?? AwardType::factory()->create()->id;
            },

        ];
    }
}
