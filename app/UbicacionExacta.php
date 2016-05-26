<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UbicacionExacta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ubicacion_exacta';

    public function distrito()
    {
        return $this->belongsTo('App\Distrito', 'id_distrito');
    }

    public function precios()
    {
        return $this->hasMany('App\Precio', 'id_ubicacion_exacta');
    }
}
