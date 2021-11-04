<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('cascade');
            $table->string('nombre', 250);
            $table->string('descripcion', 250)->nullable();

            $table->string('codigo_unidad',3);
            $table->index('codigo_unidad');

            $table->unsignedInteger('cantidad')->default(0);
            $table->unsignedDecimal('valor_unitario',8,2)->default(0)->comment('Monto del valor unitario (SIN IGV).'); //Monto del valor unitario (SIN IGV).
            $table->unsignedDecimal('igv',8,2)->default(0);
            $table->decimal('precio_unitario',8,2)->default(0)->comment('Precio de venta unitario por item. sin igv'); //Precio de venta unitario por item. sin igv
            
            $table->unsignedInteger('estado')->default(1);
            $table->unsignedInteger('usuario_creacion');
            $table->unsignedInteger('usuario_edicion')->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->timestamp('fecha_modificacion')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
