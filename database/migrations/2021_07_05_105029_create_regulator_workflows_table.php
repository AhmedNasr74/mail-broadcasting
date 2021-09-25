<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegulatorWorkflowsTable extends Migration
{
    public function up()
    {
        Schema::create('regulator_workflows', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();

            $table->foreignId('regulator_id')->constrained('regulators')->cascadeOnDelete();
            $table->foreignId('event_category_id')->default(1)->constrained('event_categories')->cascadeOnDelete();
            $table->foreignId('event_subcategory_id')->constrained('event_subcategories')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('regulator_workflows');
    }
}
