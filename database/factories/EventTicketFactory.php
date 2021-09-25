<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\EventTicket;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EventTicketFactory extends Factory
{
    protected $model = EventTicket::class;

    public function definition(): array
    {
        return [
            'ticket_type' => $this->faker->word(),
            'number' => $this->faker->randomNumber(),
            'has_sale' => $this->faker->boolean(),
            'price' => $this->faker->randomFloat(),
            'privilege' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'event_id' => function () {
                return Event::inRandomOrder()->first()->id ?? Event::factory()->create()->id;
            },
        ];
    }
}
