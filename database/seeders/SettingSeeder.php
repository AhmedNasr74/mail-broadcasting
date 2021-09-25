<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::updateOrCreate(['name' => 'event_purposes'], ['name' => 'event_purposes', 'options' => ['Getting reglatory permission', 'Apply for subsidy', 'Find sponsorship']]);
        Setting::updateOrCreate(['name' => 'currencies'], ['name' => 'currencies', 'options' => ['USD', 'SR', 'EGP']]);
        Setting::updateOrCreate(['name' => 'event_attentendce_types'], ['name' => 'event_attentendce_types', 'options' => ['Public', 'Private Invited', 'Registered', 'Ticket']]);
        Setting::updateOrCreate(['name' => 'social_media'], ['name' => 'social_media', 'options' => ['Facebook', 'Twitter', 'Instagram', 'Linkedin','Snapchat']]);
        Setting::updateOrCreate(['name' => 'event_scopes'], ['name' => 'event_scopes', 'options' => ['Local', 'Regional', 'International']]);
        Setting::updateOrCreate(['name' => 'event_ticket_types'], ['name' => 'event_ticket_types', 'options' => ['Golden', 'Silver', 'Platenuim']]);
        Setting::updateOrCreate(['name' => 'event_sponsorship_packages'], ['name' => 'event_sponsorship_packages', 'options' => ['Golden', 'Silver', 'Platenuim']]);
    }
}
