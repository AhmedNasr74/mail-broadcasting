<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\EventSupport;
use App\Models\SupportType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EventSupportFactory extends Factory
{
    protected $model = EventSupport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(),

            'event_id' => function () {
                return Event::factory()->create()->id;
            },
            'support_type_id' => function () {
                return SupportType::inRandomOrder()->first()->id ?? SupportType::factory()->create()->id;
            },
        ];
    }
}
