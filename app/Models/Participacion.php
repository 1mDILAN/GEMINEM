<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    protected $table = 'participaciones';
    public $timestamps = false;

    protected $fillable = [
        'concierto_id',
        'organizador_id',
        'rol',
    ];
    use HasFactory;

    public function concierto()
    {
        return $this->belongsTo(Concierto::class);
    }

    public function organizador()
    {
        return $this->belongsTo(Organizador::class);
    }
}
