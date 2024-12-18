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
        Schema::create('seasion_types', function (Blueprint $table) {
            $table->id();  // auto-incrementing primary key 'id'
            $table->string('title');  // session title (string)
            $table->tinyInteger('status')->default(1);  // status: 1 for Active, 0 for Inactive, default is 1 (Active)
            $table->timestamps();  // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seasion_types');
    }
};
