<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Seeder;

class IcpSeeder extends Seeder
{

    public function run()
    {
        /*
         * 0 (no relation)
         * 1 (relation without condition)
         * 2 (relation with condition)
         * */
        $criterias = [
            [
                'name' => 'Event Subcategory',
                'relation_func_name' => 'eventSubcategory',
                'filter_column_name' => 'name',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Category',
                'relation_func_name' => 'type',
                'filter_column_name' => 'name',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Category Option',
                'relation_func_name' => 'typeOptions',
                'filter_column_name' => 'name',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Coverage',
                'relation_func_name' => 'scope',
                'filter_column_name' => 'type',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Coverage Location by city',
                'relation_func_name' => 'scope.locations.city',
                'filter_column_name' => 'entity_id',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Coverage Location by region',
                'relation_func_name' => 'scope.locations.region',
                'filter_column_name' => 'entity_id',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Coverage Location by country',
                'relation_func_name' => 'scope.locations.country',
                'filter_column_name' => 'entity_id',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Participant',
                'relation_func_name' => 'partners',
                'filter_column_name' => null,
                'relation_level' => 1,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Audience Male',
                'relation_func_name' => 'scope',
                'filter_column_name' => 'expected_men',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Audience Female',
                'relation_func_name' => 'scope',
                'filter_column_name' => 'expected_women',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Audience Age Group',
                'relation_func_name' => 'scope',
                'filter_column_name' => 'audience_age_group',
                'relation_level' => 2,
                'is_json' => 1,
            ],
            [
                'name' => 'Event Influencers (celebrity participation)',
                'relation_func_name' => 'influencers',
                'filter_column_name' => null,
                'relation_level' => 1,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Venue Type',
                'relation_func_name' => 'venues.venueTye',
                'filter_column_name' => 'name',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Prizes (Awards) Financial Prizes',
                'relation_func_name' => 'awards',
                'filter_column_name' => 'financial_prizes',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Prizes (Awards) Cups Medals',
                'relation_func_name' => 'awards',
                'filter_column_name' => 'cups_medals',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Prizes (Awards) Give Ways',
                'relation_func_name' => 'awards',
                'filter_column_name' => 'give_ways',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Frequency',
                'relation_func_name' => null,
                'filter_column_name' => 'repeat_frequency',
                'relation_level' => 0,
                'is_json' => 0,
            ],

            // equal to Event Frequency
//            [
//                'name' => 'Accompanying Activities',
//                'relation_func_name' => null,
//                'filter_column_name' => 'repeat_frequency',
//                'is_relation' => 0,
//            ],

            [
                'name' => 'Event Access',
                'relation_func_name' => null,
                'filter_column_name' => 'event_attendance_type',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Marketing',
                'relation_func_name' => 'marketingCampaignOptions',
                'filter_column_name' => 'name',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Event Patronage',
                'relation_func_name' => 'patronages.type',
                'filter_column_name' => 'name',
                'relation_level' => 2,
                'is_json' => 0,
            ],
            [
                'name' => 'Is Paid',
                'relation_func_name' => null,
                'filter_column_name' => 'is_paid',
                'relation_level' => 0,
                'is_json' => 0,
            ],

        ];

        foreach ($criterias as $criteria) {
            Criteria::updateOrCreate($criteria);
        }
    }
}
