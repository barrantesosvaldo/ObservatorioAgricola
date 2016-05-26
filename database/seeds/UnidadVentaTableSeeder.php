<?php

use App\UnidadVenta;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UnidadVentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnidadVenta::insert([
    		['unidad' => 'Kg', 'id_tipo_producto' => 1,'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['unidad' => 'Rollo', 'id_tipo_producto' => 1,'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['unidad' => 'Unidad', 'id_tipo_producto' => 1,'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['unidad' => 'Pie', 'id_tipo_producto' => 2,'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['unidad' => 'Kg', 'id_tipo_producto' => 2,'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['unidad' => 'Canal', 'id_tipo_producto' => 2,'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
    		]);
    }
}
