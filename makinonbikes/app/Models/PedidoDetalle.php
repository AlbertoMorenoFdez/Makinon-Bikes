<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoDetalle extends Model
{
    use HasFactory;

    protected $table = 'pedido_detalle';

    protected $fillable = ['id_pedido', 'id_producto', 'cantidad', 'precio'];

    /**
     * Función que nos relaciona el detalle del pedido con los productos
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
