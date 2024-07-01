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
        Schema::create('plant_collections', function (Blueprint $table) {
            $table->id();
            $table->string('plant_name');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('village')->nullable();
            $table->string('mandal')->nullable();
            $table->string('district')->default('Ananthapuramu');
            $table->unsignedBigInteger('user_id');
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plant_collections');
    }
};
