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
        Schema::create('lineas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('proveedor');
            $table->string('velocidad');
            $table->decimal('precio', 8, 2);
            $table->string('tipo');
            $table->string('titular');
            $table->string('celular');
            $table->text('comentario')->nullable();
            $table->string('direccion')->nullable();
            $table->string('encargado')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lineas');
    }
};
