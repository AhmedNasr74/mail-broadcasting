<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Scope;
use App\Models\ScopeLocation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ScopeLocationFactory extends Factory
{
    protected $model = ScopeLocation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $scope = Scope::inRandomOrder()->first() ?? Scope::factory()->create();

        return [
            'scope_id' => $scope->id,
            'entity_type' => $scope->location_model,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'event_id' => function () {
                return Event::inRandomOrder()->first()->id ?? Event::factory()->create()->id;
            },
            'entity_id' => function () use ($scope) {
                return $scope->location_model::inRandomOrder()->first()->id ?? $scope->location_model::factory()->create()->id;
            },
        ];
    }
}
