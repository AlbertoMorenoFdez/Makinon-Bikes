<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * 
     * @var string
     */

    protected $table = 'carrito';

    /**
     * Hace un get del producto que se encuentra en el carrito
     */
    public function producto(){
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
