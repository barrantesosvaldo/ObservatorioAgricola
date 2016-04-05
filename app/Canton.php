<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'canton';

    public function distritos()
    {
        return $this->hasMany('App\Distrito', 'id_canton');
    }
    
}
