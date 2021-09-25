<?php

namespace Database\Seeders;

use App\Models\MarketingCampaign;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class MarketingCampainSeeder extends Seeder
{
    use EventCategories;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $m = MarketingCampaign::updateOrCreate([
            'name' => "Media Ads", 'event_category_id' => $this->sportCategoryId()
        ]);
        $m->options()->updateOrCreate([
            'name' => 'Press Ads', 'event_category_id' => $this->sportCategoryId()
        ]);
        $m->options()->updateOrCreate([
            'name' => 'Interviews', 'event_category_id' => $this->sportCategoryId()
        ]);
        $m = MarketingCampaign::updateOrCreate([
            'name' => "Public Relations", 'event_category_id' => $this->sportCategoryId()
        ]);
        $m->options()->updateOrCreate([
            'name' => 'Online Ads', 'event_category_id' => $this->sportCategoryId()
        ]);
        $m->options()->updateOrCreate([
            'name' => 'Press Relations', 'event_category_id' => $this->sportCategoryId()
        ]);
    }
}
