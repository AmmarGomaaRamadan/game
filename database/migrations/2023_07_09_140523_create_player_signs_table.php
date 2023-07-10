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
        Schema::create('player_signs', function (Blueprint $table) {
            $table->unsignedBigInteger("playerId");
            $table->foreign("playerId")->references("id")->on("players");
            $table->unsignedBigInteger("signId");
            $table->foreign("signId")->references("id")->on("signs");
            $table->dateTime("startRent");
            $table->dateTime("endRent");
            $table->unique(["playerId","signId","startRent"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_signs');
    }
};
