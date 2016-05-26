<?php
namespace App\Http\Controllers;
use App\Precio;
use App\UbicacionExacta;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrecioXController extends Controller
{
    public function obtenerPrecios()
	{
		return Precio::orderBy('id', 'asc')->get();
	}

    public function obtenerPrecio($id) {
        return Precio::find($id);
    }

	public function guardarPrecio(Request $request)
	{
		$ubicacion_exacta = new UbicacionExacta;
		$ubicacion_exacta->nombre = $request->input('ubicacion_exacta');
		$ubicacion_exacta->id_distrito = $request->input('id_distrito');
		$ubicacion_exacta->save();

		$id_ubicacion_exacta = $ubicacion_exacta->id;

		$precio = new Precio;
		$precio->fecha = $request->input('fecha');
		$precio->precio = $request->input('precio');
		$precio->valor_unidad_venta = $request->input('valor_unidad_venta');
		$precio->id_producto = $request->input('id_producto');
		$precio->id_unidad_venta = $request->input('id_unidad_venta');
		$precio->id_ubicacion_exacta = $ubicacion_exacta->id;
		$precio->id_procedencia = $request->input('id_procedencia');
		$precio->save();
		return 'Precio guardado correctamente con el id' . $ubicacion_exacta->id;
	}
	public function actualizarProducto(Request $request, $id)
	{
		$precio = Precio::find($id);
		$precio->fecha = $request->input('fecha');
		$precio->precio = $request->input('precio');
		$precio->valor_unidad_venta = $request->input('valor_unidad_venta');
		$precio->id_producto = $request->input('id_producto');
		$precio->id_unidad_venta = $request->input('id_unidad_venta');
		$precio->id_ubicacion_exacta = $request->input('id_ubicacion_exacta');
		$precio->id_procedencia = $request->input('id_procedencia');
		$precio->save();
		return 'Precio actualizado correctamente con el id' . $producto->id;
	}
	public function eliminarPrecio($id)
	{
		$precio = Precio::find($id);
		$precio->delete();
		return 'Precio eliminado correctamente con el id' . $id;
	}
}