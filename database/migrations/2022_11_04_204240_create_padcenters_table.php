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
        Schema::create('padcenters', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
            $table->string('phone',20);
            $table->string('location',50);
            $table->text('description')->nullable;
            $table->string('image')->nullable;
            $table->string('price',50);
            
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
        Schema::dropIfExists('padcenters');
    }
};
