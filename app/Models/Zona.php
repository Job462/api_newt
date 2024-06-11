<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'comentario', 'id_linea', 'created_at'
    ];

    public function linea()
    {
        return $this->belongsTo(Linea::class, 'id_linea');
    }
}
