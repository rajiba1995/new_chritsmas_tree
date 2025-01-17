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
        Schema::create('division_wise_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('seasion_type_id');
            $table->string('name');
            $table->enum('type', ['PAID', 'UNPAID']);
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('ticket_price', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('division_wise_activities');
    }
};
