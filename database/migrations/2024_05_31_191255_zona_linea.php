<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('zona_linea', function (Blueprint $table) {
            $table->unsignedBigInteger('zona_id');
            $table->unsignedBigInteger('linea_id');
            $table->timestamps();

            $table->foreign('zona_id')->references('id')->on('zonas');
            $table->foreign('linea_id')->references('id')->on('lineas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('zona_linea');
    }
};
