<?php

namespace Database\Factories;

use App\Enums\ProposalPaymentTransferAdminStatus;
use App\Models\Event;
use App\Models\Organizer;
use App\Models\Sponsor;
use App\Models\SponsorshipPackage;
use App\Models\SponsorshipProposalRequest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SponsorshipProposalRequestFactory extends Factory
{
    protected $model = SponsorshipProposalRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $organizer_id = Organizer::inRandomOrder()->first()->id ?? Organizer::factory()->create()->id;
        $event = Event::inRandomOrder()->whereOrganizerId($organizer_id)->first() ??
            Event::factory()->create(['organizer_id' => $organizer_id]);
        return [

            'organizer_id' => $organizer_id,
            'event_id' => $event->id,
            'confirmed' => $this->faker->randomElement([0, 1]),
            'status' => $this->faker->randomElement(ProposalPaymentTransferAdminStatus::all()),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'sponsor_id' => function () {
                return Sponsor::inRandomOrder()->first()->id ?? Sponsor::factory()->create()->id;
            },
            'package_id' => function () use ($event) {
                return SponsorshipPackage::inRandomOrder()->whereEventId($event->id)->first()->id ??
                    SponsorshipPackage::factory()->create(['event_id' => $event->id])->id;
            },

        ];
    }
}
