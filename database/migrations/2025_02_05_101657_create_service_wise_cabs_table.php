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
        Schema::create('service_wise_cabs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_summary_id')->comment('Foreign key referencing route_service_summaries');
            $table->unsignedBigInteger('division_wise_cab_id')->comment('Foreign key referencing division_wise_cabs');
            $table->decimal('cab_price', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('service_summary_id')
            ->references('id') // Assuming primary key is `id` in route_service_summaries
            ->on('route_service_summaries')
            ->onDelete('cascade');

            $table->foreign('division_wise_cab_id')
            ->references('id') // Assuming primary key is `id` in division_wise_cabs
            ->on('division_wise_cabs')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_wise_cabs');
    }
};
