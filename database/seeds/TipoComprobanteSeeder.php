<?php

use Illuminate\Database\Seeder;

class TipoComprobanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo_comprobante')->insert([
            'codigo' => '01',
            'abreviatura' => 'FA',
            'nombre' => 'Factura',
            'descripcion' => 'Factura',
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
        DB::table('tipo_comprobante')->insert([
            'codigo' => '03',
            'abreviatura' => 'BO',
            'nombre' => 'Boleta de venta',
            'descripcion' => 'Boleta de venta',
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
        DB::table('tipo_comprobante')->insert([
            'codigo' => '07',
            'abreviatura' => 'NC',
            'nombre' => 'Nota de crédito',
            'descripcion' => 'Nota de crédito',
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
    }
}
