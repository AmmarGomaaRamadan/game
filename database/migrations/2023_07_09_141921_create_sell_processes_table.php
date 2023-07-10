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
        Schema::create('sell_processes', function (Blueprint $table) {
            $table->id();
            $table->string("selledItem");
            $table->unsignedBigInteger("transactionId");
            $table->foreign("transactionId")->references("id")->on("transactions");
            $table->text("description")->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_processes');
    }
};
