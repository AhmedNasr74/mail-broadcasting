<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriaEventCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('criteria_event_categories', function (Blueprint $table) {
            $table->foreignId('criteria_id')->constrained('criterias')->cascadeOnDelete();
            $table->foreignId('event_category_id')->constrained('event_categories')->cascadeOnDelete();
            $table->boolean('active')->default(true);
            $table->primary(array('criteria_id', 'event_category_id'));
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('criteria_event_categories');
    }
}
