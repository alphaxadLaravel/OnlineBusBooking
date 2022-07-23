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
        Schema::create('agent_bokings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('agent_id')->unsigned();
            $table->bigInteger('traveller_id')->unsigned();
            $table->bigInteger('bus_id')->unsigned();
            $table->string('seat');
            $table->string('price');
            $table->string('date');
            $table->string('ticket');
            $table->string('from');
            $table->string('to');
            $table->string('status')->default('active');
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('traveller_id')->references('id')->on('travellers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('agent_bokings');
    }
};
