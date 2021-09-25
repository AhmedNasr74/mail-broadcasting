<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participant_level_id')->constrained('participant_levels' , 'id')->cascadeOnDelete();
            $table->foreignId('event_id')->constrained('events' , 'id')->cascadeOnDelete();
            $table->string('target_gender')->comment('male,female,both');
            $table->json('target_age_group')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
