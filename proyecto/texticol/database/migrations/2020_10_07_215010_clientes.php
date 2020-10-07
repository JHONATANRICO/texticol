<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cliente', function (Blueprint $table) {
            
            $table->increments('idClientes');
            $table->foreign('Tipo_Cliente')->reference('idTiposClientes')->on('Tipo_cliente');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->string('Direcciones',45);
            $table->integer('Telefono');
            $table->string('ciudad',45);
            $table->string('correo',45);    
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cliente');

    }
}
