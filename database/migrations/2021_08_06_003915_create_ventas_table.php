<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('numero_factura');
            $table->string('fecha');
            $table->string('valor_venta');
            $table->integer('vendedor_id');
            $table->integer('tienda_id');
            $table->timestamps();
        });

        Schema::create('ventas_productos', function(Blueprint $table){
            $table->increments('id');
            $table->string('cantidad');             
            $table->integer('producto_id')->unsigned();
            $table->integer('venta_id')->unsigned();
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
