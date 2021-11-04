<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCotizacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_cotizacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cotizacion_id')->unsigned();
            $table->foreign('cotizacion_id')->references('id')->on('cotizacion')->onDelete('cascade');
            $table->bigInteger('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('producto')->onDelete('cascade');
            $table->string('nombre',150);
            $table->string('descripcion',250)->nullable();
            $table->string('unidad',100)->nullable();
            $table->unsignedInteger('cantidad')->default(0);
            $table->decimal('valor_unitario',16,2)->default(0);
            $table->decimal('igv',16,2)->default(0);
            $table->decimal('precio_unitario',16,2)->default(0);
            $table->decimal('importe',16,2)->default(0);

            $table->unsignedInteger('estado')->default(1);
            $table->unsignedInteger('usuario_creacion');
            $table->unsignedInteger('usuario_edicion');
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
        Schema::dropIfExists('detalle_cotizacion');
    }
}
