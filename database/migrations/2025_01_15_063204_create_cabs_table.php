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
        Schema::create('cabs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('status')->default(1)->comment('0:Inactive, 1:Active'); // Default value true with comment
            $table->softDeletes(); // Soft deletes column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabs');
    }
};
