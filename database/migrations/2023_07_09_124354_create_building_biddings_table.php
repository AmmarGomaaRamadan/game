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
        Schema::create('building_biddings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("buildingId");
            $table->foreign("buildingId")->references("id")->on("buildings");
            $table->float("biddingInitialValue");
            $table->dateTime("biddingStartTime");
            $table->dateTime("biddingEndTime");
            $table->boolean("biddingStatus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('building_biddings');
    }
};
