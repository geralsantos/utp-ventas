<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprobante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_comprobante_id')->unsigned();
            $table->foreign('tipo_comprobante_id')->references('id')->on('tipo_comprobante')->onDelete('cascade');
            $table->bigInteger('tipo_operacion_id')->unsigned();
            $table->foreign('tipo_operacion_id')->references('id')->on('tipo_operacion')->onDelete('cascade');
            $table->bigInteger('serie_id')->unsigned();
            $table->foreign('serie_id')->references('id')->on('tipo_comprobante_series')->onDelete('cascade');
            $table->unsignedInteger('correlativo');
            $table->string('nombres_cliente',150);
            $table->string('razon_social_cliente',150)->nullable();
            $table->string('numero_documento',15);
            $table->decimal('igv',16,2)->default(0);
            $table->decimal('subtotal',16,2)->default(0);
            $table->decimal('total',16,2)->default(0);

            $table->unsignedInteger('estado')->default(1)->comment('0=inactivo,1=activo');//0=inactivo,1=activo,2=pendiente de anulación por el cron
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
        Schema::dropIfExists('comprobante');
    }
}
