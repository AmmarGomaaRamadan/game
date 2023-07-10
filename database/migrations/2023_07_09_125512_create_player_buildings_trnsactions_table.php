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
        Schema::create('player_buildings_trnsactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("transactorId");
            $table->foreign("transactorId")->references("id")->on("players");
            $table->float("payedMoney");
            $table->string("reason");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_buildings_trnsactions');
    }
};
