<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorshipPackageBenefitCategoryOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsorship_package_benefit_category_options', function (Blueprint $table) {

            $table->unsignedBigInteger('sponsorship_package_id');
            $table->unsignedBigInteger('benefit_category_option_id');
            $table->unsignedBigInteger('benefit_category_id');

            // to avoid too long exception
            $table->foreign('sponsorship_package_id', 'fk_pkg_id')->references('id')->on('sponsorship_packages')->cascadeOnDelete();
            $table->foreign('benefit_category_option_id', 'fk_cat_option_id')->references('id')->on('benefit_category_options')->cascadeOnDelete();
            $table->foreign('benefit_category_id', 'fk_cat_id')->references('id')->on('benefit_categories')->cascadeOnDelete();

            $table->primary(array('sponsorship_package_id', 'benefit_category_id', 'benefit_category_option_id'), 'sponsorship_package_benefits_pk');
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
        Schema::dropIfExists('sponsorship_package_benefit_category_options');
    }
}
