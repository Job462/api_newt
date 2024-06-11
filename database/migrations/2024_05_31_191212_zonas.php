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
        Schema::create('zonas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('comentario')->nullable();
            $table->unsignedBigInteger('id_linea')->nullable();
            $table->timestamps();

            $table->foreign('id_linea')->references('id')->on('lineas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('zonas');
    }
};
