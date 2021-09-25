<?php

namespace Database\Seeders;

use App\Models\WorkflowCriteria;
use Illuminate\Database\Seeder;

class WorkflowCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $criterias = [
            [
                'name' => 'Sport Category',
            ],
            [
                'name' => 'Event Category',
            ],
            [
                'name' => 'Event Category Option',
            ],
            [
                'name' => 'Event Coverage',
            ],
            [
                'name' => 'Event Coverage Location by city',
            ],
            [
                'name' => 'Event Coverage Location by region',
            ],
            [
                'name' => 'Event Coverage Location by country',
            ],
            [
                'name' => 'Event Participant',
            ],
            [
                'name' => 'Event Audience Male',
            ],
            [
                'name' => 'Event Audience Female',
            ],
            [
                'name' => 'Event Audience Age Group',
            ],
            [
                'name' => 'Event Influencers (celebrity participation)',
            ],
            [
                'name' => 'Event Venue Type',
            ],
            [
                'name' => 'Event Prizes (Awards) Financial Prizes',
            ],
            [
                'name' => 'Event Prizes (Awards) Cups Medals',
            ],
            [
                'name' => 'Event Prizes (Awards) Give Ways',
            ],
            [
                'name' => 'Event Frequency',
            ],

            // equal to Event Frequency
//            [
//                'name' => 'Accompanying Activities',
            [
                'name' => 'Event Access',
            ],
            [
                'name' => 'Event Marketing',
            ],
            [
                'name' => 'Event Patronage',
            ],
            [
                'name' => 'Is Paid',
            ],

        ];

        foreach ($criterias as $criteria) {
            WorkflowCriteria::updateOrCreate($criteria);
        }
    }
}
