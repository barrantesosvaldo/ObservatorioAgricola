<?php

use App\Provincia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::insert([
    		['nombre' => 'San José', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Alajuela', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Cartago', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Heredia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Guanacaste', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Puntarenas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Limón', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
    		]);
    }

}
