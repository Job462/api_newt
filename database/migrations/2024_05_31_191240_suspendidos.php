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
        Schema::create('suspendidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->binary('codigo');
            $table->string('usuario');
            $table->string('celular');
            $table->string('fecha');
            $table->decimal('monto', 8, 2);
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('suspendidos');
    }
};
