<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorProfileUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_profile_updates', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->nullable();
            $table->date('cr_expiry')->nullable();
            $table->double('registered_capital')->nullable();
            $table->string('business_activity')->nullable();
            $table->integer('full_time_employees')->unsigned()->nullable();
            $table->integer('part_time_employees')->unsigned()->nullable();
            $table->text('website_url')->nullable();
            $table->json('social_links')->nullable();
            $table->longText('about_company')->nullable();
            $table->longText('company_experience')->nullable();
            $table->longText('past_events_experience')->nullable();
            $table->longText('awards_details')->nullable();
            $table->string('authorized_person')->nullable();
            $table->string('contact_person')->nullable();

            //new inputs
            $table->string('name')->nullable();
            $table->string('cr_copy')->nullable();
            $table->string('address')->nullable();
            $table->text('fax')->nullable();
            $table->text('landline')->nullable();
            $table->text('social_media_account')->nullable();

            $table->foreignId('sponsor_id')->constrained('sponsors', 'id')->cascadeOnDelete();
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
        Schema::dropIfExists('sponsor_profile_updates');
    }
}
