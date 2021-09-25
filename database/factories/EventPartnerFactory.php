<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\EventPartner;
use App\Models\PartnerType;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventPartnerFactory extends Factory
{
    protected $model = EventPartner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'bio' => $this->faker->text(),

            'event_id' => function () {
                return Event::inRandomOrder()->first()->id ?? Event::factory()->create()->id;
            },

            'partner_type_id' => function () {
                return PartnerType::inRandomOrder()->first()->id ?? PartnerType::factory()->create()->id;
            },
        ];
    }
}
