<?php

namespace Database\Seeders;

use App\Models\EventSubcategory;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class EventSubcategorySeeder extends Seeder
{
    use EventCategories;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventSubcategory::updateOrCreate(['name' => 'Basketball', 'event_category_id' => $this->sportCategoryId()]);
        EventSubcategory::updateOrCreate(['name' => 'Football', 'event_category_id' => $this->sportCategoryId()]);
        EventSubcategory::updateOrCreate(['name' => 'Hand Ball', 'event_category_id' => $this->sportCategoryId()]);
        EventSubcategory::updateOrCreate(['name' => 'Volleyball', 'event_category_id' => $this->sportCategoryId()]);
        EventSubcategory::updateOrCreate(['name' => 'Tennis', 'event_category_id' => $this->sportCategoryId()]);
        EventSubcategory::updateOrCreate(['name' => 'Pin Pong', 'event_category_id' => $this->sportCategoryId()]);
    }

}
