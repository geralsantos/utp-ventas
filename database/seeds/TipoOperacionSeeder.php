<?php

use Illuminate\Database\Seeder;

class TipoOperacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo_operacion')->insert([
            'codigo' => '0101',
            'nombre' => 'Venta Interna',
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
        DB::table('tipo_operacion')->insert([
            'codigo' => '0113',
            'nombre' => 'Venta Itinerante',
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
    }
}
