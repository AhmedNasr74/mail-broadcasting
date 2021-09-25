<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreviousEventsTable extends Migration
{
    public function up()
    {
        Schema::create('previous_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('event_type');
            $table->string('year');
            $table->string('award');
            $table->string('event_url')->nullable();
            $table->json('social_media_urls')->nullable();
            $table->foreignId('organizer_id')->constrained('organizers' , 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('previous_events');
    }
}
