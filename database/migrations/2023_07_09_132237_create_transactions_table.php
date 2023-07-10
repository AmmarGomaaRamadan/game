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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTime("transactionTime");
            $table->unsignedBigInteger("playerId");
            $table->foreign("playerId")->references("id")->on("players");
            $table->float("tarnsactionValue");
            $table->string("paymentMethod");
            $table->string("cardNum")->nullable(true);
            $table->string("bankNum")->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
