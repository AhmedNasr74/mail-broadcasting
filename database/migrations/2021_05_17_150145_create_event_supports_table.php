<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSupportsTable extends Migration
{
    public function up()
    {
        Schema::create('event_supports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events' , 'id')->cascadeOnDelete();
            $table->foreignId('support_type_id')->constrained('support_types' , 'id')->cascadeOnDelete();
            $table->double('amount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_supports');
    }
}
