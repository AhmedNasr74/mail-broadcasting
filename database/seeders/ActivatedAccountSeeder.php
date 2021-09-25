<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\EventCategory;
use App\Models\Organizer;
use App\Models\Regulator;
use App\Models\Sponsor;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ActivatedAccountSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        Admin::updateOrCreate(
            [
                'email' => 'admin@bwader.test'
            ], [
            'name' => $faker->name(),
            'email' => 'admin@bwader.test',
            'password' => 'password',
            'email_verified_at' => now(),
        ]);

        Organizer::updateOrCreate(
            [
                'email' => 'organizer@bwader.test'
            ], [
            'user_type' => $faker->randomElement(['Company', 'Government', 'Individual', 'Non-Profit']),
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'email' => 'organizer@bwader.test',
            'password' => bcrypt('password'),
            'account_status' => 'approved',
            'national_id' => $faker->uuid(),
            'initial_organizer_index_number' => $faker->randomFloat(2, 0, 100),
            'registed_account_notes' => $faker->text(),
            'verification_code' => null,
            'email_verified_at' => now(),
            'phone' => $faker->phoneNumber(),
            'position' => $faker->word(),
        ]);

        Sponsor::updateOrCreate(
            [
                'email' => 'sponsor@bwader.test'
            ], [
            'user_type' => $faker->randomElement(['Company', 'Government', 'Individual', 'Non-Profit']),
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'email' => 'sponsor@bwader.test',
            'password' => 'password',
            'account_status' => 'approved',
            'initial_sponsor_index_number' => $faker->randomFloat(2, 0, 100),
            'registed_account_notes' => $faker->text(),
            'verification_code' => null,
            'email_verified_at' => now(),
            'phone' => $faker->phoneNumber(),
            'position' => $faker->word(),
        ]);

        $regulator = Regulator::updateOrCreate(
            [
                'email' => 'regulator@bwader.test'
            ], [
            'name' => $faker->name(),
            'email' => 'regulator@bwader.test',
            'phone' => '0143271505',
            'password' => 'password',
            'account_manger_name' => 'regulator manager',
            'event_main_category_id' => EventCategory::inRandomOrder()->first()->id,
        ]);

        $regulator->assignRole('regulator');
        $regulator->syncPermissions(['show_events', 'list_events']);
    }
}
