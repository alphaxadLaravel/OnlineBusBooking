<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_routes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bus_id')->unsigned();
            $table->string('travel_date');
            $table->string('price');
            $table->string('region_from');
            $table->string('region_to');
            $table->string('depart_time');
            $table->string('arrival_time');
            $table->string('depart_area');
            $table->string('arrival_area');
            $table->string('status')->default('active');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('bus_routes');
    }
};
