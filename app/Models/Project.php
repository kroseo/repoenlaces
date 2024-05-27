<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'departamento',
        'ciclo',
        'autor',
        'email',
        'resumen',
        'curso',
        'clave1',
        'clave2',
        'clave3',
        'tema',
        'enlace',
        'comentarios'
    ];
}
