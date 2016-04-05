<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_venta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unidad')->unique();
            $table->integer('id_tipo_producto')->unsigned();
            $table->timestamps();

            $table->foreign('id_tipo_producto')->references('id')->on('tipo_producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('unidad_venta');
    }
}
