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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_mobile');
            $table->string('country_code');
            $table->string('customer_whatsapp')->nullable();
            $table->string('travel_location');
            $table->string('travel_duration');
            $table->date('travel_date');
            $table->integer('number_of_adults');
            $table->integer('number_of_children')->default(0);
            $table->integer('number_of_travellor');
            $table->string('lead_type');
            $table->string('lead_source');
            $table->unsignedBigInteger('user_id');
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
