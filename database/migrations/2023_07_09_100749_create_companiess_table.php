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
        Schema::create('companiess', function (Blueprint $table) {
            $table->id();
            $table->string("companyName");
            $table->integer("companyEmployeesNum");
            $table->string("logoPath");
            $table->tesx("companyDescription");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companiess');
    }
};