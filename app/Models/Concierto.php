<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Participacion; // Agregué esta línea para utilizar el modelo de Participacion

class Concierto extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'ubicacion',
        'total_entradas',
    ];

    public function participacionesCount()
    {
        return $this->participaciones()->count();
    }
}