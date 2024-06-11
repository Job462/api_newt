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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('id_plan');
            $table->string('mes');
            $table->string('fecha_pago');
            $table->string('modalidad');
            $table->decimal('monto', 8, 2);
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('id_plan')->references('id')->on('planes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('facturas');
    }
};
