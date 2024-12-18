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
        Schema::create('hotel_price_chart_types', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('hotel_id'); // Foreign key for hotel
            $table->unsignedBigInteger('room_id'); // Foreign key for room
            $table->string('title'); // Title of the price chart
            $table->decimal('rack_rate', 10, 2)->nullable()->default(0); // Rack rate with precision
            $table->decimal('gst', 10, 2)->nullable()->default(0); // GST percentage with precision
            $table->timestamps(); // Created at and updated at timestamps

            // Add foreign key constraints if applicable
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_price_chart_types');
    }
};
