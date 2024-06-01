<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'color';

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_color_talla', 'id_color', 'id_producto');
    }
}
