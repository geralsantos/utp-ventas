<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rol')->insert([
            'nombre' => 'Administrador',
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
    
    }
}
