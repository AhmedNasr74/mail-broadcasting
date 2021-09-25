<?php

use App\Enums\WorkflowConditionEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegulatorWorkflowConditionsTable extends Migration
{
    public function up()
    {
        Schema::create('regulator_workflow_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default(WorkflowConditionEnum::GENERAL);
            $table->longText('notes')->nullable();
            $table->foreignId('regulator_workflow_id')->constrained('regulator_workflows')->cascadeOnDelete();
            $table->foreignId('criteria_id')->nullable()->constrained('workflow_criterias')->cascadeOnDelete();
            $table->string('criteria_value')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('regulator_workflow_conditions');
    }
}
