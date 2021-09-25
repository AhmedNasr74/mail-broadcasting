<?php

namespace Database\Seeders;

use App\Models\SupportType;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class SupportTypeSeeder extends Seeder
{
    use EventCategories;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SupportType::updateOrCreate(['name' => 'Financial', 'event_category_id' => $this->sportCategoryId()]);
        SupportType::updateOrCreate(['name' => 'Facility', 'event_category_id' => $this->sportCategoryId()]);
        SupportType::updateOrCreate(['name' => 'Promotional', 'event_category_id' => $this->sportCategoryId()]);
        SupportType::updateOrCreate(['name' => 'Others', 'event_category_id' => $this->sportCategoryId()]);
    }
}
