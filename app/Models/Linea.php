<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'proveedor', 'velocidad', 'precio', 'tipo', 'titular', 'celular', 'comentario', 'direccion', 'encargado', 'created_at'
    ];
}
