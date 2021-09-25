<?php

namespace Database\Seeders;

use App\Models\EventCategory;
use App\Models\Regulator;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class RegulatorAccountSeeder extends Seeder
{
    protected $faker;

    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    public function run()
    {
        $mainCategoryAccounts = ['sports_regulator@bwader.test', 'entertainment_regulator@bwader.test', 'educational_regulator@bwader.test', 'cultural_regulator@bwader.test'];

        foreach ($mainCategoryAccounts as $account) {
            $main_category = EventCategory::where('name', 'Sports')->first();
            $regulator = Regulator::updateOrCreate(
                [
                    'email' => $account
                ], [
                'name' => $this->faker->name(),
                'email' => $account,
                'password' => 'password',
                'phone' => '0143271505',
                'account_manger_name' => 'regulator manager',
                'event_main_category_id' => $main_category->id,
            ]);
            $regulator->assignRole('regulator');
            $regulator->syncPermissions(['show_events', 'list_events']);
        }


        $subcategoryAccounts = ['football_regulator@bwader.test', 'basketball_regulator@bwader.test', 'handball@bwader.test', 'volleyball@bwader.test', 'tennis@bwader.test', 'pinpong@bwader.test'];
        $sportCategory = EventCategory::where('name', 'Sports')->first();

        $regulator = Regulator::updateOrCreate(
            [
                'email' => 'football_regulator@bwader.test'
            ], [
            'name' => $this->faker->name(),
            'email' => 'football_regulator@bwader.test',
            'password' => 'password',
            'phone' => '0143271505',
            'account_manger_name' => 'regulator manager',
            'event_main_category_id' => $sportCategory->id,
            'event_subcategory_id' => $sportCategory->subCategories()->where('name', 'Football')->first()->id
        ]);
        $regulator->assignRole('regulator');
        $regulator->syncPermissions(['show_events', 'list_events', 'update_events']);


        $regulator = Regulator::updateOrCreate(
            [
                'email' => 'basketball_regulator@bwader.test'
            ], [
            'name' => $this->faker->name(),
            'email' => 'basketball_regulator@bwader.test',
            'password' => 'password',
            'phone' => '0143271505',
            'account_manger_name' => 'regulator manager',
            'event_main_category_id' => $sportCategory->id,
            'event_subcategory_id' => $sportCategory->subCategories()->where('name', 'Basketball')->first()->id
        ]);
        $regulator->assignRole('regulator');
        $regulator->syncPermissions(['show_events', 'list_events', 'update_events']);



        $regulator = Regulator::updateOrCreate(
            [
                'email' => 'handball@bwader.test'
            ], [
            'name' => $this->faker->name(),
            'email' => 'handball@bwader.test',
            'password' => 'password',
            'phone' => '0143271505',
            'account_manger_name' => 'regulator manager',
            'event_main_category_id' => $sportCategory->id,
            'event_subcategory_id' => $sportCategory->subCategories()->where('name', 'Hand Ball')->first()->id
        ]);
        $regulator->assignRole('regulator');
        $regulator->syncPermissions(['show_events', 'list_events', 'update_events']);

        $regulator = Regulator::updateOrCreate(
            [
                'email' => 'volleyball@bwader.test'
            ], [
            'name' => $this->faker->name(),
            'email' => 'volleyball@bwader.test',
            'password' => 'password',
            'phone' => '0143271505',
            'account_manger_name' => 'regulator manager',
            'event_main_category_id' => $sportCategory->id,
            'event_subcategory_id' => $sportCategory->subCategories()->where('name', 'Volleyball')->first()->id
        ]);
        $regulator->assignRole('regulator');
        $regulator->syncPermissions(['show_events', 'list_events', 'update_events']);


        $regulator = Regulator::updateOrCreate(
            [
                'email' => 'tennis@bwader.test'
            ], [
            'name' => $this->faker->name(),
            'email' => 'tennis@bwader.test',
            'password' => 'password',
            'phone' => '0143271505',
            'account_manger_name' => 'regulator manager',
            'event_main_category_id' => $sportCategory->id,
            'event_subcategory_id' => $sportCategory->subCategories()->where('name', 'Tennis')->first()->id
        ]);
        $regulator->assignRole('regulator');
        $regulator->syncPermissions(['show_events', 'list_events', 'update_events']);

        $regulator = Regulator::updateOrCreate(
            [
                'email' => 'pinpong@bwader.test'
            ], [
            'name' => $this->faker->name(),
            'email' => 'pinpong@bwader.test',
            'password' => 'password',
            'phone' => '0143271505',
            'account_manger_name' => 'regulator manager',
            'event_main_category_id' => $sportCategory->id,
            'event_subcategory_id' => $sportCategory->subCategories()->where('name', 'Pin Pong')->first()->id
        ]);
        $regulator->assignRole('regulator');
        $regulator->syncPermissions(['show_events', 'list_events', 'update_events']);
    }
}
