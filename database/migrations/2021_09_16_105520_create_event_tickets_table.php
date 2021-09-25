<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('event_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_type');
            $table->integer('number');
            $table->boolean('has_sale')->default(false);
            $table->double('price');
            $table->longText('privilege')->nullable();
            $table->foreignId('event_id')->constrained('events')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_tickets');
    }
}
