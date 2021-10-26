<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuario')->insert([
            'nombre' => 'Geral Poma',
            'usuario' => 'admin',
            'password' => base64_encode('123456'),
            'rol_id' => 1,
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
    
    }
}
