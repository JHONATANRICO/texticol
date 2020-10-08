<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('Tipo_Cliente')->reference('id')->on('tipo_clientes');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->string('Direcciones',45);
            $table->integer('Telefono');
            $table->string('ciudad',45);
            $table->string('correo',45); 
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
        Schema::dropIfExists('clientes');
    }
}
