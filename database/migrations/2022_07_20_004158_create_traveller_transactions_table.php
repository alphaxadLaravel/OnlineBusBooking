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
        Schema::create('traveller_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('traveller_id')->unsigned();
            $table->bigInteger('traveller_booking_id')->unsigned();
            $table->string('payment_mean');
            $table->string('payment_number');
            $table->string('status')->default('active');
            $table->foreign('traveller_id')->references('id')->on('travellers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('traveller_booking_id')->references('id')->on('traveller_bokings')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('traveller_transactions');
    }
};
