<?php

namespace Database\Seeders;

use App\Models\EventHosting;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class EventHostingSeeder extends Seeder
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
        $eventHosting = EventHosting::create(['name' => 'Professional Standard', 'event_category_id' => $categoryID]);
        $eventHosting->options()->updateOrCreate(['name' => 'Stadium', 'event_category_id' => $categoryID]);

        $eventHosting = EventHosting::create(['name' => 'Amateur Standard', 'event_category_id' => $categoryID]);

        $eventHosting = EventHosting::create(['name' => 'Special fit', 'event_category_id' => $categoryID]);
        $eventHosting->options()->updateOrCreate(['name' => 'Park', 'event_category_id' => $categoryID]);
    }
}
