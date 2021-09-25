<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_awards', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->text('financial_prizes');
            $table->text('cups_medals');
            $table->longText('give_ways');

            $table->foreignId('event_id')->constrained('events', 'id')->cascadeOnDelete();
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
        Schema::dropIfExists('event_awards');
    }
}
