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
        Schema::table('hotel_seasion_times', function (Blueprint $table) {
            $table->string('seasion_type')->nullable()->after('id'); // Adjust the column placement if needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotel_seasion_times', function (Blueprint $table) {
            $table->dropColumn('seasion_type');
        });
    }
};
