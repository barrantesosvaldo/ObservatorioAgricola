<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'precio';

    public function producto()
    {
        return $this->belongsTo('App\Producto', 'id_producto');
    }

    public function procedencia()
    {
        return $this->belongsTo('App\Procedencia', 'id_procedencia');
    }

    public function ubicacionExacta()
    {
        return $this->belongsTo('App\UbicacionExacta', 'id_ubicacion_exacta');
    }

    public function unidadVenta()
    {
        return $this->belongsTo('App\UnidadVenta', 'id_unidad_venta');
    }
}
