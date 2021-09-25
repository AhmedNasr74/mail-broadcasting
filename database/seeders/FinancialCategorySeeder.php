<?php

namespace Database\Seeders;

use App\Models\FinancialCategory;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class FinancialCategorySeeder extends Seeder
{
    use EventCategories;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FinancialCategory::updateOrCreate(['name' => 'Stall Rent', 'event_category_id' => $this->sportCategoryId()]);
        FinancialCategory::updateOrCreate(['name' => 'Administration', 'event_category_id' => $this->sportCategoryId()]);
        FinancialCategory::updateOrCreate(['name' => 'Luggage Transport', 'event_category_id' => $this->sportCategoryId()]);
        FinancialCategory::updateOrCreate(['name' => 'Players Traveling', 'event_category_id' => $this->sportCategoryId()]);
    }
}
