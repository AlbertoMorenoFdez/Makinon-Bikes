<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    protected $primaryKey = 'id_producto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_producto',
        'nombre',
        'tipo',
        'id_marca',
        'id_proveedor',
        'precio',
        'descripcion_corta',
        'descripcion_larga',
        'imagen',
    ];
    
    /**
     * Funcion que devuelve el proveedor al que pertenece el producto
     * @return \App\Models\Proveedor
     */

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    /**
     * Funcion que devuelve la marca a la que pertenece el producto
     */
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }

    /**
     * Accesor que nos permite una descripción mas corta del producto
     */

    public function getShortDescriptionAttribute()
    {
        return substr($this->descripcion_corta, 0, 100) . '...';
    }

    /**
     * Accesor que nos permite una descripción mas larga del producto
     */

    public function getLongDescriptionAttribute()
    {
        return substr($this->descripcion_larga, 0, 300) . '...';
    }
}
