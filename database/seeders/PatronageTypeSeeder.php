<?php

namespace Database\Seeders;

use App\Models\PatronageType;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class PatronageTypeSeeder extends Seeder
{
    use EventCategories;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatronageType::updateOrCreate(['name' => 'Government Organization', 'event_category_id' => $this->sportCategoryId()]);
        PatronageType::updateOrCreate(['name' => 'Official Key Figure', 'event_category_id' => $this->sportCategoryId()]);
        PatronageType::updateOrCreate(['name' => 'Public Figure', 'event_category_id' => $this->sportCategoryId()]);
        PatronageType::updateOrCreate(['name' => 'Special Guest', 'event_category_id' => $this->sportCategoryId()]);
    }
}
