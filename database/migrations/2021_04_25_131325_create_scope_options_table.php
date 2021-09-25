<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScopeOptionsTable extends Migration
{
    public function up()
    {
        /*Schema::create('scope_options', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->foreignId('scope_id')->constrained('scopes' , 'id')->cascadeOnDelete();
            $table->timestamps();
        });*/
    }

    public function down()
    {
        /*Schema::dropIfExists('scope_options');*/
    }
}
