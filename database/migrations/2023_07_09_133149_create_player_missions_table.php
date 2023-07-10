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
        Schema::create('player_missions', function (Blueprint $table) {
            
            $table->unsignedBigInteger("missionId");
            $table->foreign("missionId")->references("id")->on("missions");
            $table->unsignedBigInteger("playerId");
            $table->foreign("playerId")->references("id")->on("players");
            $table->primary(["missionId","playerId"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_missions');
    }
};
