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
        Schema::create('player_buildings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("buildingId");   
            $table->unsignedBigInteger("playerId"); 
            $table->dateTime("startOwnDate");  
            $table->dateTime("endOwnDate");  
            $table->foreign("playerId")->references("id")->on("players");
            $table->foreign("buildingId")->references("id")->on("buildings");
            $table->unique(["buildingId","playerId","startOwnDate","endOwnDate"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_buildings');
    }
};
