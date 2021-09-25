<?php

namespace Database\Factories;

use App\Models\EventCategory;
use App\Models\MarketingCampaign;
use App\Models\MarketingCampaignOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarketingCampaignOptionFactory extends Factory
{
    protected $model = MarketingCampaignOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'active' => true,
            'marketing_campaign_id' => function () {
                return MarketingCampaign::inRandomOrder()->first()->id ?? MarketingCampaign::factory()->create()->id;
            },
            'event_category_id' => function () {
                return EventCategory::inRandomOrder()->first()->id ?? EventCategory::factory()->create()->id;
            },
        ];
    }
}
