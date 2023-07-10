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
        Schema::create('player_tool_biddings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("playerToolId");
            $table->foreign("playerToolId")->references("id")->on("player_tools");
            $table->float("biddingInitialValue");
            $table->dateTime("biddingStarttime");
            $table->dateTime("biddingEndtime");
            $table->boolean("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_tool_biddings');
    }
};
