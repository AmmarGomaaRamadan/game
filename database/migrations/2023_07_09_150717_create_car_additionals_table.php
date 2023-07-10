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
        Schema::create('car_additionals', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("model");
            $table->string("type")->nullable(true);
            $table->string("brand");
            $table->string("color")->nullable(true);
            $table->float("price")->nullable(true);
            $table->integer("goldNum")->nullable(true);
            $table->text("description")->nullable(true);

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_additionals');
    }
};
