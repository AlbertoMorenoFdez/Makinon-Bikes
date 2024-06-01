<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaTaller extends Model
{
    use HasFactory;

    protected $table = 'cita_taller';

    protected $primaryKey = 'id_cita_taller';


    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id_usuario',
        'opcion',
        'fecha',
        'hora',
        'estado',
    ];

    /**
     * Función que permite obtener el usuario al que pertenece la cita
     */
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
}
