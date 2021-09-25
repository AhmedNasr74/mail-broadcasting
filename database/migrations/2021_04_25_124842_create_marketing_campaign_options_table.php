<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingCampaignOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('marketing_campaign_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('active')->default(true);
            $table->foreignId('marketing_campaign_id')->constrained('marketing_campaigns' , 'id')->cascadeOnDelete();

            $table->foreignId('event_category_id')->constrained('event_categories' , 'id')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marketing_campaign_options');
    }
}
