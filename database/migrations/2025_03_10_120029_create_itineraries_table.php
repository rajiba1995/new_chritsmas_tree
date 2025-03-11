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
        Schema::create('itineraries', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['preset', 'post_inquiry']); // Type of itinerary
            $table->foreignId('destination_id')->constrained('states')->onDelete('cascade'); // From state ID
            $table->foreignId('hotel_category')->constrained('categories')->onDelete('cascade'); // Hotel category from categories ID
            $table->integer('total_days'); // Total days
            $table->integer('total_nights'); // Total nights
            $table->text('night_journey'); // Stores night-specific details
            $table->text('divisions_journey'); // Stores divisions details
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itineraries');
    }
};
