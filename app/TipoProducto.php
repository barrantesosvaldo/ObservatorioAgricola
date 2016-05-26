<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tipo_producto';

    public function productos()
    {
        return $this->hasMany('App\Producto', 'id_tipo_producto');
    }

    public function unidadVenta()
    {
        return $this->hasMany('App\UnidadVenta', 'id_tipo_producto');
    }

    public function procedencia()
    {
        return $this->hasMany('App\Procedencia', 'id_tipo_producto');
    }
}
