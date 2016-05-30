<?php

namespace App\Http\Controllers;

use App\Precio;
use App\UbicacionExacta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class PrecioController extends Controller
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

    public function obtenerPrecios()
	{
		return Precio::leftJoin('unidad_venta', 'precio.id_unidad_venta', '=', 'unidad_venta.id')
				->leftJoin('procedencia', 'precio.id_procedencia', '=', 'procedencia.id')
				->leftJoin('producto', 'precio.id_producto', '=', 'producto.id')
				->leftJoin('tipo_producto', 'producto.id_tipo_producto', '=', 'tipo_producto.id')
				->leftJoin('ubicacion_exacta', 'precio.id_ubicacion_exacta', '=', 'ubicacion_exacta.id')
				->leftJoin('distrito', 'ubicacion_exacta.id_distrito', '=', 'distrito.id')
				->leftJoin('canton', 'distrito.id_canton', '=', 'canton.id')
				->leftJoin('provincia', 'canton.id_provincia', '=', 'provincia.id')
				->select('precio.id as id_precio', 'precio.fecha as fecha', 'precio.precio as precio',
						'precio.valor_unidad_venta as valor_unidad_venta',
						'unidad_venta.unidad as unidad_venta',
						'procedencia.nombre as procedencia',
						'producto.nombre as producto',
						'tipo_producto.nombre as tipo_producto',
						'ubicacion_exacta.nombre as ubicacion_exacta',
						'distrito.nombre as distrito',
						'canton.nombre as canton',
						'provincia.nombre as provincia')
				->orderBy('id_precio', 'asc')
				->get();
	}

	public function mediaPreciosFecha(Request $request)
	{
		$id_producto = $request->input('id_producto');
		$fecha = $request->input('fecha');

		return Precio::where([['id_producto',$id_producto], ['fecha', $fecha]])
				->select(DB::raw('AVG(precio) as media_precios'))
				->groupBy('id_producto')
				->get();
	}

	public function mediaPreciosRangoFechas(Request $request)
	{
		$id_producto = $request->input('id_producto');
		$fecha_inicio = $request->input('fecha_inicio');
		$fecha_fin = $request->input('fecha_fin');

		$rango_fechas = [$fecha_inicio, $fecha_fin];

		return Precio::where('id_producto', $id_producto)
				->whereBetween('fecha', $rango_fechas)
				->select(DB::raw('AVG(precio) as media_precios'))
				->groupBy('id_producto')
				->get();
	}

	public function obtenerPreciosFecha($id)
	{
		return Precio::leftJoin('producto', 'precio.id_producto', '=', 'producto.id')
			->select(
				'precio.fecha as fecha', 
				'precio.precio as precio',
				'producto.nombre as producto')
			->where('producto.id', '=', $id)
			->orderBy('fecha', 'asc')->get();
	}

	public function obtenerPrecio($id)
	{
		return Precio::leftJoin('unidad_venta', 'precio.id_unidad_venta', '=', 'unidad_venta.id')
				->leftJoin('procedencia', 'precio.id_procedencia', '=', 'procedencia.id')
				->leftJoin('producto', 'precio.id_producto', '=', 'producto.id')
				->leftJoin('tipo_producto', 'producto.id_tipo_producto', '=', 'tipo_producto.id')
				->leftJoin('ubicacion_exacta', 'precio.id_ubicacion_exacta', '=', 'ubicacion_exacta.id')
				->leftJoin('distrito', 'ubicacion_exacta.id_distrito', '=', 'distrito.id')
				->leftJoin('canton', 'distrito.id_canton', '=', 'canton.id')
				->leftJoin('provincia', 'canton.id_provincia', '=', 'provincia.id')
				->select(
					'precio.id as id_precio',
					'precio.valor_unidad_venta as valor_unidad_venta',
					'precio.precio as precio',
					'precio.fecha as fecha',
					'unidad_venta.id as id_unidad_venta',
					'procedencia.id as id_procedencia',
					'producto.id as id_producto',
					'tipo_producto.id as id_tipo_producto',
					'ubicacion_exacta.nombre as ubicacion_exacta',
					'distrito.id as id_distrito',
					'canton.id as id_canton',
					'provincia.id as id_provincia')
				->where('precio.id', '=', $id)
				->orderBy('fecha', 'asc')
				->first();
        //return Precio::find($id);
    }

	public function guardarPrecio(Request $request)
	{
		$ubicacion_exacta_nombre = $request->input('ubicacion_exacta');

		$count = UbicacionExacta::select('nombre')
					->where('nombre', 'like', $ubicacion_exacta_nombre)
					->count();

		if ($count > 0) {
			$ubicacion_exacta = UbicacionExacta::select('id', 'nombre')
						->where('nombre', 'like', $ubicacion_exacta_nombre)
						->first();
		} else {
			$ubicacion_exacta = new UbicacionExacta;

			$ubicacion_exacta->nombre = $request->input('ubicacion_exacta');
			$ubicacion_exacta->id_distrito = $request->input('id_distrito');

			$ubicacion_exacta->save();
		}

		$id_ubicacion_exacta = $ubicacion_exacta->id;

		$precio = new Precio;

		$precio->fecha = $request->input('fecha');
		$precio->precio = $request->input('precio');
		$precio->valor_unidad_venta = $request->input('valor_unidad_venta');
		$precio->id_producto = $request->input('id_producto');
		$precio->id_unidad_venta = $request->input('id_unidad_venta');
		$precio->id_ubicacion_exacta = $id_ubicacion_exacta;
		$precio->id_procedencia = $request->input('id_procedencia');

		$precio->save();

		return 'Precio guardado correctamente con el id' . $precio->id;
	}

	public function actualizarPrecio(Request $request, $id)
	{
		$ubicacion_exacta_nombre = $request->input('ubicacion_exacta');

		$count = UbicacionExacta::select('nombre')
					->where('nombre', 'like', $ubicacion_exacta_nombre)
					->count();

		if ($count > 0) {
			$ubicacion_exacta = UbicacionExacta::select('id', 'nombre')
						->where('nombre', 'like', $ubicacion_exacta_nombre)
						->first();
		} else {
			$ubicacion_exacta = new UbicacionExacta;

			$ubicacion_exacta->nombre = $request->input('ubicacion_exacta');
			$ubicacion_exacta->id_distrito = $request->input('id_distrito');

			$ubicacion_exacta->save();
		}

		$id_ubicacion_exacta = $ubicacion_exacta->id;

		$precio = Precio::find($id);

		$precio->fecha = $request->input('fecha');
		$precio->precio = $request->input('precio');
		$precio->valor_unidad_venta = $request->input('valor_unidad_venta');
		$precio->id_producto = $request->input('id_producto');
		$precio->id_unidad_venta = $request->input('id_unidad_venta');
		$precio->id_ubicacion_exacta = $id_ubicacion_exacta;
		$precio->id_procedencia = $request->input('id_procedencia');

		$precio->save();

		return 'Precio actualizado correctamente con el id' . $precio->id;
	}

	public function eliminarPrecio($id)
	{
		$precio = Precio::find($id);

		$precio->delete();

		return 'Precio eliminado correctamente con el id' . $id;
	}
}
