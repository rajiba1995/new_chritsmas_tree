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
        Schema::create('destination_wise_route_waypoints', function (Blueprint $table) {
            $table->id('id'); // Auto-increment primary key
            $table->unsignedBigInteger('route_id')->comment('Foreign key referencing destination_wise_routes');
            $table->unsignedBigInteger('division_id')->comment('Foreign key referencing cities');
            $table->integer('sequence')->comment('Order of the waypoint, e.g., 1 for first, 2 for second, etc.');
            $table->decimal('distance_from_previous_km', 10, 2)->nullable()->comment('Distance from the previous waypoint');
            $table->string('travel_time_from_previous', 50)->nullable()->comment('Travel time from the previous waypoint');
            $table->timestamps(); // Includes created_at and updated_at

            // Foreign key constraints
            $table->foreign('route_id')
                ->references('id') // Assuming primary key is `id` in destination_wise_routes
                ->on('destination_wise_routes')
                ->onDelete('cascade');

            $table->foreign('division_id')
                ->references('id') // Assuming primary key is `id` in cities
                ->on('cities')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination_wise_route_waypoints');
    }
};
