<?php
namespace App\Http\Controllers;
use App\UnidadVenta;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UnidadVentaController extends Controller
{

	/**
	 * No permite el acceso a las funcionalidades del controlador si no ha iniciado sesión
	 */
	/*public function __construct()
    {
        // Apply the jwt.auth middleware to all methods in this controller
        // except for the authenticate method. We don't want to prevent
        // the user from retrieving their token if they don't already have it
        $this->middleware('jwt.auth');
    }*/

    public function obtenerUnidadesVenta($id_tipo_producto)
	{
		return UnidadVenta::select('id', 'unidad')->where('id_tipo_producto', $id_tipo_producto)->orderBy('id', 'asc')->get();
	}
}