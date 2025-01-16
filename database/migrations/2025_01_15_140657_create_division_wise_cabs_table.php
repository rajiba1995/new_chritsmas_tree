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
        Schema::create('division_wise_cabs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('seasion_type_id');
            $table->unsignedBigInteger('cab_id');
            $table->timestamps();

            $table->foreign('division_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('seasion_type_id')->references('id')->on('seasion_types')->onDelete('cascade');
            $table->foreign('cab_id')->references('id')->on('cabs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('division_wise_cabs');
    }
};
