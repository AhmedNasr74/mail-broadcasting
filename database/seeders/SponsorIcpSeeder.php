<?php

namespace Database\Seeders;

use App\Models\Criteria;
use App\Models\IcpCriteria;
use App\Models\Sponsor;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;

class SponsorIcpSeeder extends Seeder
{
    use WithFaker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IcpCriteria::truncate();
        $this->setUpFaker();
        $sponosr = Sponsor::first() ?? Sponsor::factory()->create();
        $icp = $sponosr->icps()->updateOrCreate(['name' => $this->faker->name()]);
        $Criteria = Criteria::whereName('Is Paid')->first();
        $icp->criterias()->syncWithoutDetaching([
            $Criteria->id => [
            'sponsor_id' => $sponosr->id,
            'priority_index' => 5,
            'must_index' => $this->faker->randomElement([true , false]),
            'criteria_value' => [true]
        ]]);
        $Criteria = Criteria::whereName('Event Influencers (celebrity participation)')->first();
        $icp->criterias()->syncWithoutDetaching([
            $Criteria->id => [
                'sponsor_id' => $sponosr->id,
                'priority_index' => 5,
                'must_index' => $this->faker->randomElement([true , false]),
                'criteria_value' => null
            ]]);

        $Criteria = Criteria::whereName('Event Audience Age Group')->first();
        $icp->criterias()->syncWithoutDetaching([
            $Criteria->id => [
                'sponsor_id' => $sponosr->id,
                'priority_index' => 5,
                'must_index' => $this->faker->randomElement([true , false]),
                'criteria_value' => [60],
                'json_key' => 'youth'
            ]]);
    }
}
