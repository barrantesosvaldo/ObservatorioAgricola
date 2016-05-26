<?php

namespace App\Http\Controllers;

use App\Procedencia;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProcedenciaController extends Controller
{
    public function obtenerProcedencias($id_tipo_producto)
	{
		return Procedencia::select('id', 'nombre')->where('id_tipo_producto', $id_tipo_producto)->orderBy('id', 'asc')->get();
	}
}
