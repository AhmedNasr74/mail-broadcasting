<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('venue_name');
            $table->string('venue_address');
            $table->string('session_name');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('capacity');
            $table->dateTime('opening_time');
            $table->boolean('parking_available');
            $table->boolean('meal_available');
            $table->json('accommodation_activities')->nullable();
            $table->integer('male_count')->unsigned();
            $table->integer('female_count')->unsigned();
            $table->string('age_group');
            $table->string('participant_level');

            $table->foreignId('event_id')->constrained('events', 'id')->cascadeOnDelete();
            $table->foreignId('venue_type_id')->constrained('venue_types', 'id')->cascadeOnDelete();
            $table->foreignId('city_id')->constrained('cities', 'id')->cascadeOnDelete();
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
        Schema::dropIfExists('venues');
    }
}
