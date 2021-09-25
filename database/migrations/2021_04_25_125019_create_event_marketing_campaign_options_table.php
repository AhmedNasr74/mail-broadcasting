<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventMarketingCampaignOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('event_marketing_campaign_options', function (Blueprint $table) {
            $table->foreignId('event_id')->constrained('events' , 'id')->cascadeOnDelete();
            $table->foreignId('campaign_option_id')->constrained('marketing_campaign_options', 'id')->cascadeOnDelete();
            $table->foreignId('marketing_campaign_id')->constrained('marketing_campaigns', 'id')->cascadeOnDelete();
            $table->boolean('is_disclaimer')->default(false);
            $table->primary(['event_id' , 'campaign_option_id' ] , 'event_marketing_campaign_options_pk');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_marketing_campaign_options');
    }
}
