<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoColorTalla extends Model
{
    use HasFactory;

    protected $table = 'producto_color_talla';

    protected $fillable = [
        'id_producto',
        'id_color',
        'id_talla',
        'stock',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto', 'id_producto');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'id_color', 'id_color');
    }

    public function talla()
    {
        return $this->belongsTo(Talla::class, 'id_talla', 'id_talla');
    }
}
