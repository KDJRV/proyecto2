<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id-ven');
            $table->integer('id-c')->unsigned();
            $table->integer('id-pr')->unsigned();
            $table->integer('id-se')->unsigned();
            $table->foreign('id-c')->references('id-c')->on('clientes');
            $table->foreign('id-pr')->references('id-pr')->on('productos');
            $table->foreign('id-se')->references('id-se')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas');
    }
}
