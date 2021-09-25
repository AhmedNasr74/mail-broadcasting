<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcpCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icp_criterias', function (Blueprint $table) {

            $table->foreignId('icp_id')->constrained('icps')->cascadeOnDelete();
            $table->foreignId('criteria_id')->constrained('criterias')->cascadeOnDelete();
            $table->float('priority_index');
            $table->boolean('must_index')->default(0);
            $table->json('criteria_value')->nullable();
            $table->string('json_key')->nullable();
            $table->string('model_type');
            $table->integer('model_id');
            //$table->foreignId('sponsor_id')->constrained('sponsors', 'id')->cascadeOnDelete();

            $table->primary(array('icp_id', 'criteria_id'));
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
        Schema::dropIfExists('icp_criterias');
    }
}
