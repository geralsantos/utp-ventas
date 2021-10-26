<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cliente')->insert([
            'sexo' => 'Hombre',
            'nombres' => 'Geral Mariano',
            'apellidos' => 'Poma Santos',
            'numero_documento' => '76934412',
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
    }
}
