<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventEventTypeOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_event_type_options', function (Blueprint $table) {
            $table->foreignId('event_id')->constrained('events', 'id')->cascadeOnDelete();
            $table->foreignId('event_type_option_id')->constrained('event_type_options', 'id')->cascadeOnDelete();
            $table->foreignId('event_type_id')->constrained('event_types', 'id')->cascadeOnDelete();

            $table->primary(array('event_id', 'event_type_option_id'));
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
        Schema::dropIfExists('event_event_type_options');
    }
}
