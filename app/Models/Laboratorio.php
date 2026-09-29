<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Laboratorio extends Model
{
    protected $fillable = [
        'nome',
        'localizacao',
        'capacidade',
        'descricao',
    ];

    public function reservas(): HasMany
    {
        return $this->hasMany(Reserva::class);
    }
}