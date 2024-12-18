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
        Schema::create('hotel_price_charts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('price_chart_type_id'); // Foreign key for price chart type
            $table->unsignedBigInteger('hotel_id'); // Foreign key for hotel
            $table->unsignedBigInteger('room_id'); // Foreign key for room
            $table->string('plan_title'); // Title of the plan
            $table->string('plan_item'); // Plan item name
            $table->decimal('item_price', 10, 2)->nullable()->default(0); // Plan item price
            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key constraints
            $table->foreign('price_chart_type_id')->references('id')->on('hotel_price_chart_types')->onDelete('cascade');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_price_charts');
    }
};
