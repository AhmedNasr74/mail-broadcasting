<?php

namespace Database\Factories;

use App\Models\Icp;
use App\Models\Regulator;
use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class IcpFactory extends Factory
{
    protected $model = Icp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name(),
            'icpable_type' => get_class($this->getRandomModel()),
            'icpable_id' => function () {
                return $this->getRandomModel()->newQuery()->inRandomOrder()->first()->id ??
                    $this->getRandomModel()->newQuery()->factory()->create()->id;
            },
        ];
    }

    private function getRandomModel()
    {
        return $this->faker->randomElement([new Sponsor, new Regulator]);
    }
}
