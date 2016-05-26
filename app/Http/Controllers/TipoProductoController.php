<?php
namespace App\Http\Controllers;
use App\TipoProducto;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class TipoProductoController extends Controller
{
    public function obtenerTipoProductos()
	{
		return TipoProducto::select('id', 'nombre')->orderBy('id', 'asc')->get();
	}
}