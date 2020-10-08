<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('idVentas')->unsigned();
            $table->foreign('idVentas')->references('id')->on('ventas');

            $table->Integer('idObligaciones')->unsigned();
            $table->foreign('idObligaciones')->references('id')->on('obligaciones');

            $table->Integer('idReclamos')->unsigned();
            $table->foreign('idReclamos')->references('id')->on('reclamos');
            
            $table->Integer('TotalVentas');
            $table->Integer('TotalPedidos');
            $table->Integer('TotalObligaciones');
            $table->Integer('Utilidades');
            $table->date('FechaInforme');
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
        Schema::dropIfExists('informes');
    }
}
