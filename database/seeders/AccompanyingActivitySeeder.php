<?php

namespace Database\Seeders;

use App\Models\AccompanyingActivity;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class AccompanyingActivitySeeder extends Seeder
{
    use EventCategories;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryID = $this->sportCategoryId();

        AccompanyingActivity::updateOrCreate(['event_category_id' => $categoryID, 'name' => 'Training']);
        AccompanyingActivity::updateOrCreate(['event_category_id' => $categoryID, 'name' => 'Food']);
        $accompanyingActivity = AccompanyingActivity::updateOrCreate(['event_category_id' => $categoryID, 'name' => 'Ceremony']);
        $accompanyingActivity->options()->updateOrCreate(['name' => 'Parade', 'event_category_id' => $categoryID]);
        $accompanyingActivity->options()->updateOrCreate(['name' => 'Carnival', 'event_category_id' => $categoryID]);
    }
}
