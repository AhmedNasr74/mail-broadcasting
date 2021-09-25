<?php

namespace Database\Seeders;

use App\Models\ParticipantLevel;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class ParticipantLevelSeeder extends Seeder
{
    use EventCategories;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParticipantLevel::updateOrCreate(['name' => 'Professionals', 'event_category_id' => $this->sportCategoryId()]);
        ParticipantLevel::updateOrCreate(['name' => 'Amateurs', 'event_category_id' => $this->sportCategoryId()]);
        ParticipantLevel::updateOrCreate(['name' => 'Public', 'event_category_id' => $this->sportCategoryId()]);
    }
}
