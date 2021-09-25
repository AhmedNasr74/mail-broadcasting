<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventPurposeSeeder::class);
        $this->call(EventCategorySeeder::class);
        $this->call(EventSubcategorySeeder::class);
        $this->call(EventTypeSeeder::class); //event type with options
        $this->call(VenueTypesSeeder::class);
        $this->call(EventHostingSeeder::class);
        $this->call(AccompanyingActivitySeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(SponsorshipSeeder::class);
        $this->call(MarketingCampainSeeder::class);
        $this->call(FinancialCategorySeeder::class);
        $this->call(PartnerTypeSeeder::class);
        $this->call(SupportTypeSeeder::class);
        $this->call(IcpSeeder::class);
        $this->call(PatronageTypeSeeder::class);
        $this->call(ParticipantLevelSeeder::class);
        $this->call(BenefitCategorySeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(WorkflowCriteriaSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(ActivatedAccountSeeder::class);
        $this->call(RegulatorAccountSeeder::class);
    }
}
