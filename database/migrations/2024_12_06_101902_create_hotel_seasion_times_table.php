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
        Schema::create('hotel_seasion_times', function (Blueprint $table) {
            $table->id();  // auto-incrementing primary key 'id'
            $table->unsignedBigInteger('seasion_type_id');  // Foreign key to session_types table
            $table->unsignedBigInteger('hotel_id');  // Foreign key to hotels table
            $table->date('start_date');  // Date for the start of the session
            $table->date('end_date');  // Date for the end of the session
            $table->timestamps();  // created_at and updated_at columns

            // Foreign key constraints
            $table->foreign('seasion_type_id')->references('id')->on('seasion_types')->onDelete('cascade');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_seasion_times');
    }
};
