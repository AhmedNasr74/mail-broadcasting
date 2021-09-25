<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorshipPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsorship_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->double('price');
            $table->string('currency')->nullable()->default('$');

            $table->foreignId('event_id')->constrained('events')->cascadeOnDelete();
            $table->foreignId('sponsorship_type_id')->constrained('sponsorship_types')->cascadeOnDelete();
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
        Schema::dropIfExists('sponsorship_packages');
    }
}
