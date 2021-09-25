<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPartnersTable extends Migration
{
    public function up()
    {
        Schema::create('event_partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('bio')->nullable();
            $table->foreignId('event_id')->constrained('events' , 'id')->cascadeOnDelete();
            $table->foreignId('partner_type_id')->constrained('partner_types' , 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_partners');
    }
}
