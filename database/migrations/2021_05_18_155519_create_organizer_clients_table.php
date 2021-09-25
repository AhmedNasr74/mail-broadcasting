<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizerClientsTable extends Migration
{
    public function up()
    {
        Schema::create('organizer_clients', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('attached_link')->nullable();
            $table->string('ref_phone_number')->nullable();
            $table->foreignId('organizer_id')->constrained('organizers' , 'id')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('organizer_clients');
    }
}
