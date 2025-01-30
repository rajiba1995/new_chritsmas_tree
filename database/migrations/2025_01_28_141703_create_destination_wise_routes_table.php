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
        Schema::create('destination_wise_routes', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('route_name')->comment('e.g., Guwahati to Shillong to Cherrapunjee');
            $table->unsignedBigInteger('destination_id')->comment('e.g., Meghalaya');
            $table->decimal('total_distance_km', 10, 2)->nullable()->comment('Total route distance in kilometers');
            $table->string('total_travel_time', 50)->nullable()->comment('Total estimated travel time');
            $table->timestamps(); // Includes created_at and updated_at

            // Foreign key constraint
            $table->foreign('destination_id')
                  ->references('id')
                  ->on('states')
                  ->onDelete('cascade'); // Deletes routes when the destination is deleted
        });
        
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination_wise_routes');
    }
};
