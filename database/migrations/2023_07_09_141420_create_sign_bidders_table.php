<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sign_bidders', function (Blueprint $table) {
            $table->unsignedBigInteger("playerId");
            $table->foreign("playerId")->references("id")->on("players");
            $table->unsignedBigInteger("signBiddingId");
            $table->foreign("signBiddingId")->references("id")->on("sign_biddings");
            $table->float("offer");
            $table->primary(["playerId","signBiddingId","offer"]);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sign_bidders');
    }
};
