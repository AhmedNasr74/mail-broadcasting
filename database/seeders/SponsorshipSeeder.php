<?php

namespace Database\Seeders;

use App\Models\SponsorshipType;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    use EventCategories;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SponsorshipType::updateOrCreate([
            'name' => 'Package',
            'event_category_id' => $this->sportCategoryId()
        ]);
    }
}
