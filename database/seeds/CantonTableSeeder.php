<?php

use App\Canton;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CantonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Canton::insert([
    		['nombre' => 'Alajuela', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'San Ramón', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Grecia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'San Mateo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Atenas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Naranjo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Palmares', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Poás', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Orotina', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'San Carlos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Alfaro Ruiz', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Valverde Vega', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Upala', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Los Chiles', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Guatuso', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
    		]);
    }
}
