<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    use HasFactory;

    protected $table = 'talla';

    /**
     * Función que nos relaciona las tallas con los productos, muchos a muchos
     *
     * @return void
     */
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_color_talla', 'id_talla', 'id_producto');
    }
}
