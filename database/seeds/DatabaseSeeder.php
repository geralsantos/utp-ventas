<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(TipoComprobanteSeeder::class);
        $this->call(TipoComprobanteSeriesSeeder::class);
        $this->call(TipoOperacionSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
