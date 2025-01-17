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
        Schema::create('division_wise_activity_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_wise_activity_id')->constrained('division_wise_activities')->onDelete('cascade'); // Foreign key to division_wise_activities
            $table->string('file_path'); // Path to the uploaded image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('division_wise_activity_images');
    }
};
