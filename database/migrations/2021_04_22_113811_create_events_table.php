<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('website_url')->nullable();
            $table->string('video_url')->nullable();
            $table->string('status')->nullable()->default('created');
            $table->longText('about_event')->nullable();
            $table->longText('event_main_activities')->nullable();
            $table->string('repeat_frequency')->nullable();
            $table->timestamp('expected_repeat_date')->nullable();
            $table->json('support_details')->nullable();
            $table->json('social_links')->nullable();
            $table->json('online_files')->nullable();
            $table->text('event_attendance_type')->nullable();
            $table->json('registration_links')->nullable();
            $table->boolean('is_paid')->nullable();
            $table->json('booking_urls')->nullable();
            $table->date('start_date')->nullable();
            $table->time('start_time')->nullable();
            $table->date('end_date')->nullable();
            $table->time('end_time')->nullable();
            $table->string('timezone')->nullable();
            $table->timestamp('drafted_at')->nullable();
            $table->string('component_route_name')->nullable();

            $table->foreignId('organizer_id')->constrained('organizers')->cascadeOnDelete();
            $table->foreignId('event_subcategory_id')->nullable()->constrained('event_subcategories')->cascadeOnDelete();
            $table->foreignId('event_type_id')->nullable()->constrained('event_types')->cascadeOnDelete();
            $table->foreignId('event_category_id')->default(1)->constrained('event_categories')->cascadeOnDelete();
            $table->foreignId('event_purpose_id')->default(1)->constrained('event_purposes')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
