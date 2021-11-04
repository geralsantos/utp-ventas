<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoOperacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_operacion', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 4);
            $table->string('nombre',150);

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
        Schema::dropIfExists('tipo_operacion');
    }
}
