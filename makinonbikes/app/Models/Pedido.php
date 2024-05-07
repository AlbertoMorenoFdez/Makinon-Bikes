<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';

    protected $primaryKey = 'id_pedido';

    protected $fillable = ['id_usuario', 'fecha', 'estado', 'comentario', 'total'];

    /**
     * Funcion que nos relaciona el pedido con los usuarios
     */
    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
