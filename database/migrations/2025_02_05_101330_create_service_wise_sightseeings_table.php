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
        Schema::create('service_wise_sightseeings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_summary_id')->comment('Foreign key referencing route_service_summaries');
            $table->unsignedBigInteger('sightseeing_id')->comment('Foreign key referencing division_wise_sightseeings');
            $table->timestamps();

            $table->foreign('service_summary_id')
            ->references('id') // Assuming primary key is `id` in destination_wise_routes
            ->on('route_service_summaries')
            ->onDelete('cascade');
            $table->foreign('sightseeing_id')
            ->references('id') // Assuming primary key is `id` in destination_wise_routes
            ->on('division_wise_sightseeings')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_wise_sightseeings');
    }
};
