<?php

namespace Database\Factories;

use App\Enums\EventStatus;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventPurpose;
use App\Models\EventSubcategory;
use App\Models\EventType;
use App\Models\Organizer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EventFactory extends Factory
{
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'website_url' => $this->faker->url(),
            'video_url' => $this->faker->url(),
            'status' => $this->faker->randomElement(EventStatus::all()),
            'about_event' => $this->faker->text(),
            'event_main_activities' => $this->faker->text(),
            'repeat_frequency' => $this->faker->text(),
            'expected_repeat_date' => $this->faker->dateTime(),
            'support_details' => [$this->faker->text() , $this->faker->text()],
            'social_links' => [$this->faker->text() , $this->faker->text()],
            'online_files' => [$this->faker->text() , $this->faker->text()],
            'event_attendance_type' => $this->faker->word(),
            'registration_links' => $this->faker->words(),
            'is_paid' => $this->faker->boolean(),
            'booking_urls' => $this->faker->words(),
            'start_date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_date' => $this->faker->date(),
            'end_time' => $this->faker->time(),
            'timezone' => $this->faker->time(),

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),


            'organizer_id' => function () {
                return Organizer::inRandomOrder()->first()->id ?? Organizer::factory()->create()->id;
            },

            'event_purpose_id' => function () {
                return EventPurpose::inRandomOrder()->first()->id ?? EventPurpose::factory()->create()->id;
            },
            'event_subcategory_id' => function () {
            return EventSubcategory::whereEventCategoryId($this->eventCategory()->id)->inRandomOrder()->first()->id ?? EventSubcategory::factory()->create(['event_category_id' =>$this->eventCategory()->id]);
            },
            'event_type_id' => function () {
                return EventType::inRandomOrder()->first()->id ?? EventType::factory()->create()->id;
            },
            'event_category_id' => $this->eventCategory()->id,
        ];
    }

    private function eventCategory()
    {
        return EventCategory::inRandomOrder()->first() ?? EventCategory::factory()->create();
    }
}
