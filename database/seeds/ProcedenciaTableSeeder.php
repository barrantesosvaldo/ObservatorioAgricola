<?php

use App\Procedencia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ProcedenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Procedencia::insert([
    		['nombre' => 'CENADA', 'id_tipo_producto' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Feria del Agricultor', 'id_tipo_producto' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Subasta Ganadera', 'id_tipo_producto' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
    		]);
    }
}
