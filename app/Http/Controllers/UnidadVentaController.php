<?php
namespace App\Http\Controllers;
use App\UnidadVenta;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UnidadVentaController extends Controller
{
    public function obtenerUnidadesVenta($id_tipo_producto)
	{
		return UnidadVenta::select('id', 'unidad')->where('id_tipo_producto', $id_tipo_producto)->orderBy('id', 'asc')->get();
	}
}