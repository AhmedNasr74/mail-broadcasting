<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventBudgetsTable extends Migration
{
    public function up()
    {
        Schema::create('event_budgets', function (Blueprint $table) {

            $table->foreignId('event_id')->constrained('events' , 'id')->cascadeOnDelete();
            $table->foreignId('financial_category_id')->constrained('financial_categories' , 'id')->cascadeOnDelete();
            $table->string('cost_title')->nullable();
            $table->double('amount');
            $table->longText('note')->nullable();

            $table->primary(array('event_id', 'financial_category_id'));
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_budgets');
    }
}
