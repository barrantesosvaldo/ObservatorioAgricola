<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tipo_usuario';
    
    public function usuarios()
    {
        return $this->hasMany('App\Usuario', 'id_tipo_usuario');
    }
}
