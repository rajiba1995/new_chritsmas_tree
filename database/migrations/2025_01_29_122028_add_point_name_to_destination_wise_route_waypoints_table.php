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
        Schema::table('destination_wise_route_waypoints', function (Blueprint $table) {
            $table->string('point_name', 255)->after('route_id')->nullable()->comment('Name of the waypoint');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('destination_wise_route_waypoints', function (Blueprint $table) {
            //
        });
    }
};
