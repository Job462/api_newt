<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspendido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id', 'codigo', 'usuario', 'celular', 'fecha', 'monto', 'created_at'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
