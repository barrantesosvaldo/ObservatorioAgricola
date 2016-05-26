<?php

use App\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Producto::insert([
            ['nombre' => 'Papa', 'id_tipo_producto' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Culantro', 'id_tipo_producto' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Sandía', 'id_tipo_producto' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Papaya', 'id_tipo_producto' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Ternero', 'id_tipo_producto' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Ternera', 'id_tipo_producto' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Vaca', 'id_tipo_producto' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Toro', 'id_tipo_producto' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
    		]);
    }
}
