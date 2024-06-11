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
        Schema::create('plan_cliente', function (Blueprint $table) {
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('cliente_id');
            $table->timestamps();

            $table->foreign('plan_id')->references('id')->on('planes');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('plan_cliente');
    }
};
