<?php

use App\Enums\ProposalPaymentTransferAdminStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorshipProposalRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsorship_proposal_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sponsor_id')->constrained('sponsors', 'id')->cascadeOnDelete();
            $table->foreignId('event_id')->constrained('events', 'id')->cascadeOnDelete();
            $table->foreignId('organizer_id')->constrained('organizers', 'id')->cascadeOnDelete();
            $table->foreignId('package_id')->constrained('sponsorship_packages', 'id')->cascadeOnDelete();
            $table->tinyInteger('confirmed')->default(0);
            $table->string('status')->default(ProposalPaymentTransferAdminStatus::PENDING);
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
        Schema::dropIfExists('sponsorship_proposal_requests');
    }
}
