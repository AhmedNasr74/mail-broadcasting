<?php

namespace Database\Factories;

use App\Models\EventCategory;
use App\Models\Regulator;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegulatorFactory extends Factory
{
    protected $model = Regulator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => \Str::random(9),
            'account_manger_name' => $this->faker->name,
            'event_main_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            },
        ];
    }
}
