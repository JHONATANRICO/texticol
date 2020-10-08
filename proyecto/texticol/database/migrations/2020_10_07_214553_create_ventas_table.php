<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('idClientes')->unsigned();
            $table->foreign('idClientes')->references('id')->on('clientes');

            $table->Integer('idProductos')->unsigned();
            $table->foreign('idProductos')->references('id')->on('productos');

            $table->Integer('CantidadProductos');
            $table->Date('FechaVenta');
            $table->Integer('TotalVenta');
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
        Schema::dropIfExists('ventas');
    }
}
