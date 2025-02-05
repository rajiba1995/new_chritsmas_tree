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
        Schema::create('route_service_summaries', function (Blueprint $table) {
            $table->id();
            $table->enum('service_type', ['Route Wise', 'Per Day']);
            $table->unsignedBigInteger('route_id')->comment('Foreign key referencing destination_wise_routes');
            $table->unsignedBigInteger('destination_id')->comment('Foreign key referencing states');
            $table->unsignedBigInteger('division_id')->nullable()->comment('Foreign key referencing cities');
            $table->unsignedBigInteger('seasion_type_id');
            $table->timestamps();
            // Foreign key constraints
            $table->foreign('route_id')
                ->references('id') // Assuming primary key is `id` in destination_wise_routes
                ->on('destination_wise_routes')
                ->onDelete('cascade');

            $table->foreign('destination_id')
                ->references('id') // Assuming primary key is `id` in states
                ->on('states')
                ->onDelete('cascade');

            $table->foreign('division_id')
                ->references('id') // Assuming primary key is `id` in cities
                ->on('cities')
                ->onDelete('cascade');

            $table->foreign('seasion_type_id')
                ->references('id') // Assuming primary key is `id` in seasion_types
                ->on('seasion_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route_service_summaries');
    }
};
