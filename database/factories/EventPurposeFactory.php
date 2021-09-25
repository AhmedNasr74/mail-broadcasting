<?php

namespace Database\Factories;

use App\Models\EventPurpose;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EventPurposeFactory extends Factory
{
    protected $model = EventPurpose::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
