<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterias', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('relation_func_name')->nullable();
            $table->string('filter_column_name')->nullable();
            $table->smallInteger('relation_level')->default(0)->comment(' 0 (no relation) 1 (relation without condition) 2 (relation with condition) ');
            $table->smallInteger('is_json')->default(0)->comment('0 (text field) 1 (json field) ');
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
        Schema::dropIfExists('criterias');
    }
}
