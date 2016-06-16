<?php
namespace App\Http\Controllers;
use App\Producto;
use App\TipoProducto;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ProductoController extends Controller
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

	public function productos()
	{
		return Producto::select('id', 'nombre')
					->orderBy('id', 'asc')
					->get();
	}
	
	public function obtenerProductos($id)
	{
		return Producto::select('id', 'nombre')->where('id_tipo_producto', $id)->orderBy('id', 'asc')->get();
	}

	public function obtenerTipoProducto($id)
	{
		$producto = Producto::find($id);
		return TipoProducto::select('id', 'nombre')->where('id', $producto->id_tipo_producto)->get();//find($producto->id_tipo_producto);
	}

	public function guardarProducto(Request $request, $id_tipo_producto)
	{
		$producto = new Producto;
		$producto->nombre = $request->input('nombre');
		$producto->imagen = $request->input('imagen');
		$producto->id_tipo_producto = $id_tipo_producto;
		$producto->save();
		return 'Producto guardado correctamente con el id' . $producto->id;
	}
	public function actualizarProducto(Request $request, $id, $id_tipo_producto)
	{
		$producto = Producto::find($id);
		$producto->nombre = $request->input('nombre');
		$producto->imagen = $request->input('imagen');
		$producto->id_tipo_producto = $id_tipo_producto;
		$producto->save();
		return 'Producto actualizado correctamente con el id' . $producto->id;
	}
	public function eliminarProducto($id)
	{
		$producto = Producto::find($id);
		$producto->delete();
		return 'Producto eliminado correctamente con el id' . $id;
	}
}