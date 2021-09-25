<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScopeLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('scope_locations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignId('event_id')->constrained('events' , 'id')->cascadeOnDelete();
            $table->foreignId('scope_id')->constrained('scopes' , 'id')->cascadeOnDelete();
            $table->string('entity_type');
            $table->unsignedBigInteger('entity_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scope_locations');
    }
}
