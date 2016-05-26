<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'distrito';

    public function canton()
    {
        return $this->belongsTo('App\Canton', 'id_canton');
    }

    public function ubicacionExacta()
    {
        return $this->hasMany('App\UbicacionExacta', 'id_distrito');
    }
}
