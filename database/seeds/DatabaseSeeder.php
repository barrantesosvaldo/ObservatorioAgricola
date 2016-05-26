<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call(ProvinciaTableSeeder::class);
        $this->call(CantonTableSeeder::class);
        $this->call(DistritoTableSeeder::class);
        $this->call(TipoProductoTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
        $this->call(UnidadVentaTableSeeder::class);
        $this->call(ProcedenciaTableSeeder::class);
    }
}
