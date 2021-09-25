<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScopesTable extends Migration
{
    public function up()
    {
        Schema::create('scopes', function (Blueprint $table) {
            $table->id();
            $table->integer('attendees_no');
            $table->string('type')->nullable();
            //$table->string('type_option')->nullable();
            $table->string('location_model');
            $table->integer('expected_men');
            $table->integer('expected_women');
            $table->json('audience_age_group')->nullable();

            $table->foreignId('event_id')->constrained('events', 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scopes');
    }
}
