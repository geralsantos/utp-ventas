<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categoria')->insert([
            'nombre' => 'smartphone',
            'usuario_creacion' => 1,
            'usuario_edicion' => 1
        ]);
    }
}
