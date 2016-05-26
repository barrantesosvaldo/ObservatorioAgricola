<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Producto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'producto';
    public function tipoProducto()
    {
        return $this->belongsTo('App\TipoProducto', 'id_tipo_producto');
    }
    public function precios()
    {
        return $this->hasMany('App\Precio', 'id_producto');
    }
}