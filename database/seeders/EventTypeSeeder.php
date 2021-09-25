<?php

namespace Database\Seeders;

use App\Models\EventType;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    use EventCategories;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventType = EventType::updateOrCreate(['name' => 'Championship', 'event_category_id' => $this->sportCategoryId()]);
        $eventType->options()->updateOrCreate(['name' => 'Professional Leauge', 'event_category_id' => $this->sportCategoryId()]);
        $eventType->options()->updateOrCreate(['name' => 'University Leauge', 'event_category_id' => $this->sportCategoryId()]);
        $eventType->options()->updateOrCreate(['name' => 'School League', 'event_category_id' => $this->sportCategoryId()]);
        $eventType->options()->updateOrCreate(['name' => 'Privet', 'event_category_id' => $this->sportCategoryId()]);

        $eventType = EventType::updateOrCreate(['name' => 'Entertainment', 'event_category_id' => $this->sportCategoryId()]);
        $eventType->options()->updateOrCreate(['name' => 'Friendly Matches', 'event_category_id' => $this->sportCategoryId()]);

        EventType::updateOrCreate(['name' => 'Social', 'event_category_id' => $this->sportCategoryId()]);
    }
}
