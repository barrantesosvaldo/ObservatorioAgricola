<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrecioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->double('precio', 10, 2);
            $table->double('valor_unidad_venta', 10, 2);
            $table->bigInteger('id_producto')->unsigned();
            $table->integer('id_unidad_venta')->unsigned();
            $table->bigInteger('id_ubicacion_exacta')->unsigned();
            $table->bigInteger('id_procedencia')->unsigned();
            $table->timestamps();

            $table->foreign('id_producto')->references('id')->on('producto');
            $table->foreign('id_unidad_venta')->references('id')->on('unidad_venta');
            $table->foreign('id_ubicacion_exacta')->references('id')->on('ubicacion_exacta');
            $table->foreign('id_procedencia')->references('id')->on('procedencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('precio');
    }
}
