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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('user_id');
            $table->string('user_email');
            $table->integer('phone');
            $table->string('band')->nullable();
            $table->date('date');
            $table->foreignId('padcenter_id')->constrained('padcenters');
            $table->string('schedhule');
            $table->string('instrument')->nullable();
            $table->string('payment');
            $table->string('transaction_id');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('bookings');
    }
};
