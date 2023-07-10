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
        Schema::create('building_bidders', function (Blueprint $table) {
            $table->unsignedBigInteger("playerId");
            $table->unsignedBigInteger("buildingId");
            $table->float("offer");
            $table->foreign("playerId")->references("id")->on("players");
            $table->foreign("buildingId")->references("id")->on("buildings");
            $table->primary(["playerId","buildingId","offer"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('building_bidders');
    }
};
