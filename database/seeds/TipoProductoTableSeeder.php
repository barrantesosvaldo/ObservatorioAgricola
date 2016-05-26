<?php

use App\TipoProducto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TipoProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	TipoProducto::insert([
    		['nombre' => 'Agrícola', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Ganadería', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
    		]);
    }
}
