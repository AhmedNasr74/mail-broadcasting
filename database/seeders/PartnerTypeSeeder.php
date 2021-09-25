<?php

namespace Database\Seeders;

use App\Models\PartnerType;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class PartnerTypeSeeder extends Seeder
{
    use EventCategories;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartnerType::updateOrCreate(['name' => 'Public Relations', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'Press', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'TV', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'Media', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'Airline', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'Hospitality', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'Transportation', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'Organizer', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'knowledge', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'Research', 'event_category_id' => $this->sportCategoryId()]);
        PartnerType::updateOrCreate(['name' => 'In cooperation', 'event_category_id' => $this->sportCategoryId()]);
    }
}
