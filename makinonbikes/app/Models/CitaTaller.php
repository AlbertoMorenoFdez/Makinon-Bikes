<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaTaller extends Model
{
    use HasFactory;

    protected $table = 'cita_taller';

    protected $primaryKey = 'id_cita_taller';
    
}
