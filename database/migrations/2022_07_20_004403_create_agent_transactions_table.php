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
        Schema::create('agent_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('agent_id')->unsigned();
            $table->bigInteger('agent_boking_id')->unsigned();
            $table->string('payment_mean');
            $table->string('payment_number');
            $table->string('status')->default('active');
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('agent_boking_id')->references('id')->on('agent_bokings')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('agent_transactions');
    }
};
