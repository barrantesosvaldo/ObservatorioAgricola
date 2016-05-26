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
            ['nombre' => 'San José', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Escazú', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Desamparados', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Puriscal', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Tarrazú', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Aserrí', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Mora', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Goicochea', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Santa Ana', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Alajuelita', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Vázquez De Coronado', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Acosta', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Tibás', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Moravia', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Montes De Oca', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Turrubares', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Dota', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Curridabat', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Pérez Zeledón', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'León Cortés', 'id_provincia' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Alajuela', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'San Ramón', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Grecia', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'San Mateo', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Atenas', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Naranjo', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Palmares', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Poás', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Orotina', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'San Carlos', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Alfaro Ruiz', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Valverde Vega', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Upala', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Los Chiles', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Guatuso', 'id_provincia' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Cartago', 'id_provincia' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Paraiso', 'id_provincia' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'La Unión', 'id_provincia' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Jiménez', 'id_provincia' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Turrialba', 'id_provincia' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Alvarado', 'id_provincia' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Oreamuno', 'id_provincia' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'El Guarco', 'id_provincia' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Heredia', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Barva', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Santo Domingo', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Santa Bárbara', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'San Rafael', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'San Isidro', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Belén', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Flores', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'San Pablo', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Sarapiquí', 'id_provincia' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Liberia', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Nicoya', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Santa Cruz', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Bagaces', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Carrillo', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Cañas', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Abangares', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Tilarán', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Nandayure', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'La Cruz', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Hojancha', 'id_provincia' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Puntarenas', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Esparza', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Buenos Aires', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Montes De Oro', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Osa', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Aguirre', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Golfito', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Coto Brus', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Parrita', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Corredores', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Garabito', 'id_provincia' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Limón', 'id_provincia' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Pococí', 'id_provincia' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Siquirres', 'id_provincia' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Talamanca', 'id_provincia' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Matina', 'id_provincia' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Guácimo', 'id_provincia' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
    		]);
    }

}
