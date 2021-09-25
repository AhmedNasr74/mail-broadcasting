<?php

namespace Database\Seeders;

use App\Models\VenueType;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class VenueTypesSeeder extends Seeder
{
    use EventCategories;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VenueType::create(['name' => 'Professional Standard','event_category_id' => $this->sportCategoryId()]);
        VenueType::create(['name' => 'Amateur Standard','event_category_id' => $this->sportCategoryId()]);
        VenueType::create(['name' => 'Special fit','event_category_id' => $this->sportCategoryId()]);
    }
}
