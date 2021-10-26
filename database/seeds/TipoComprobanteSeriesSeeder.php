<?php

use Illuminate\Database\Seeder;

class TipoComprobanteSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo_comprobante_series')->insert([
            'tipo_comprobante_id' => 1,
            'nombre' => 'F001',
            'correlativo' => 0,
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
        DB::table('tipo_comprobante_series')->insert([
            'tipo_comprobante_id' => 2,
            'nombre' => 'B001',
            'correlativo' => 0,
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
    }
}
