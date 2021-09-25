<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegulatorsTable extends Migration
{
    public function up()
    {
        Schema::create('regulators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('account_manger_name');

            $table->foreignId('event_main_category_id')->constrained('event_categories')->cascadeOnDelete();
            $table->foreignId('event_subcategory_id')->nullable()->constrained('event_subcategories')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('regulators');
    }
}
