<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\SponsorshipPackage;
use App\Models\SponsorshipType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SponsorshipPackageFactory extends Factory
{
    protected $model = SponsorshipPackage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => 1000.00,
            'currency' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'event_id' => function () {
                return Event::inRandomOrder()->first()->id ?? Event::factory()->create()->id;
            },
            'sponsorship_type_id' => function () {
                return SponsorshipType::inRandomOrder()->first()->id ?? SponsorshipType::factory()->create()->id;
            },
        ];
    }
}
