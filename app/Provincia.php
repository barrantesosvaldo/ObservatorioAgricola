<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'provincia';

    public function cantones()
    {
        return $this->hasMany('App\Canton', 'id_provincia');
    }
}
