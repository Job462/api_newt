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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('ci');
            $table->string('nombre');
            $table->string('celular');
            $table->string('contacto')->nullable();
            $table->string('direccion')->nullable();
            $table->unsignedBigInteger('id_zona')->nullable();
            $table->string('ip')->nullable();
            $table->unsignedBigInteger('id_plan')->nullable();
            $table->string('activacion')->nullable();
            $table->string('estado')->nullable();
            $table->text('comentario')->nullable();
            $table->timestamps();

            $table->foreign('id_zona')->references('id')->on('zonas');
            $table->foreign('id_plan')->references('id')->on('planes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
