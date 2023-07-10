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
        Schema::create('player_cars_additionals', function (Blueprint $table) {
            $table->unsignedBigInteger("playerId");
            $table->foreign("playerId")->references("id")->on("players"); 
            $table->unsignedBigInteger("carId");
            $table->foreign("carId")->references("id")->on("cars");
            $table->unsignedBigInteger("additionalId");
            $table->foreign("additionalId")->references("id")->on("car_additionals");
            $table->primary(["playerId","carId","additionalId"]);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_cars_additionals');
    }
};
