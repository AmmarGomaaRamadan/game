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
        Schema::create('sign_biddings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("signId");
            $table->foreign("signId")->references("id")->on("signs");
            $table->unsignedBigInteger("winnerId");
            $table->foreign("winnerId")->references("id")->on("players");
            $table->float("initialValue");
            $table->dateTime("startTime");
            $table->dateTime("endTime");
            $table->boolean("status");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sign_biddings');
    }
};
