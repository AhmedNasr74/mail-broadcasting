<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfluencersTable extends Migration
{
    public function up()
    {
        Schema::create('influencers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('identity_number');
            $table->foreignId('country_id')->constrained('countries' , 'id')->cascadeOnDelete();
            $table->foreignId('event_id')->constrained('events' , 'id')->cascadeOnDelete();
            $table->json('social_media')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('influencers');
    }
}
