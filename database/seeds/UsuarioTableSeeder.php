<?php

use App\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::insert([
    		['nombre' => 'admin', 'contrasenna' => 'admin', 'id_tipo_usuario' => 1, 'created_at' => Carbon::now()]
    		]);
    }
}
