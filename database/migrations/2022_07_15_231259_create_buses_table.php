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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('bus')->unique();
            $table->string('region_from');
            $table->string('region_to');
            $table->string('price');
            $table->string('wifi');
            $table->string('AC');
            $table->string('food');
            $table->string('essentials');
            $table->string('snacks');
            $table->string('safety');
            $table->string('about');
            $table->string('photo');
            $table->string('status')->default('active');
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
        Schema::dropIfExists('buses');
    }
};
