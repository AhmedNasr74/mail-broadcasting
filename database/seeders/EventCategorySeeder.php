<?php

namespace Database\Seeders;

use App\Enums\EventCategoryEnum;
use App\Models\EventCategory;
use Illuminate\Database\Seeder;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (EventCategoryEnum::all() as $categoryName)
            EventCategory::updateOrCreate(['name' => $categoryName]);
    }
}
