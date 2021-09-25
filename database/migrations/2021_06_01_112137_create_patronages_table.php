<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatronagesTable extends Migration
{
    public function up()
    {
        Schema::create('patronages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('biography')->nullable();
            $table->foreignId('patronage_type_id')->constrained('patronage_types', 'id')->cascadeOnDelete();
            $table->foreignId('event_id')->constrained('events', 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patronages');
    }
}
