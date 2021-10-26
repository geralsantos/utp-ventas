<?php


use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('producto')->insert([
            'nombre' => 'prod1',
            'codigo_unidad' => 'UNI',
            'cantidad' => 100,
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
    }
}
