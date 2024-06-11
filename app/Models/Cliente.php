<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'ci', 'nombre', 'celular', 'contacto', 'direccion', 'id_zona', 'ip', 'id_plan', 'activacion', 'estado', 'comentario', 'created_at'
    ];

    public function zona()
    {
        return $this->belongsTo(Zona::class, 'id_zona');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'id_plan');
    }
}
