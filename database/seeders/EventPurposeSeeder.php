<?php

namespace Database\Seeders;

use App\Models\EventPurpose;
use Illuminate\Database\Seeder;

class EventPurposeSeeder extends Seeder
{
    public function run()
    {
        EventPurpose::create([
            'name' => 'Getting reglatory permission'
        ]);
        EventPurpose::create([
            'name' => 'Apply for subsidy'
        ]);
        EventPurpose::create([
            'name' => 'Find sponsership'
        ]);
    }
}
