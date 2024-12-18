<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('hotel_id') 
                ->constrained('hotels')
                ->onDelete('cascade');
            $table->string('room_type'); 
            $table->string('room_category'); 
            $table->string('room_name'); 
            $table->unsignedInteger('no_of_rooms'); 
            $table->unsignedInteger('capacity');
            $table->unsignedInteger('no_of_beds');
            $table->unsignedInteger('mattress')->default(0); 
            $table->text('ammenities')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
