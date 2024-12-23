<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'especialidade',
        'telefone',
        'email',
        'ativo',
    ];
}
