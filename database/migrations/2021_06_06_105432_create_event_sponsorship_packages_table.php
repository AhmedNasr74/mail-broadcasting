<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSponsorshipPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_sponsorship_packags', function (Blueprint $table) {

            $table->foreignId('event_id')->constrained('events', 'id')->cascadeOnDelete();
            $table->foreignId('sponsorship_package_id')->constrained('sponsorship_packages', 'id')->cascadeOnDelete();

            $table->primary(array('event_id', 'sponsorship_package_id'), 'event_package_pk');
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
        Schema::dropIfExists('event_sponsorship_packags');
    }
}
