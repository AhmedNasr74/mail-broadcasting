<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventScopeOptionsTable extends Migration
{
    public function up()
    {
        /*Schema::create('event_scope_options', function (Blueprint $table) {
            $table->foreignId('event_id')->constrained('events' , 'id')->cascadeOnDelete();
            $table->foreignId('scope_option_id')->constrained('scope_options' , 'id')->cascadeOnDelete();
            $table->primary(['event_id' , 'scope_option_id']);
            $table->timestamps();
        });*/
    }

    public function down()
    {
        /*Schema::dropIfExists('event_scope_options');*/
    }
}
