<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposChamados extends Model
{
    use HasFactory;

    // Nome correto da tabela no banco de dados
    protected $table = 'tiposchamados';

    protected $fillable = [
        'descricao',
        'observacoes',
    ];
}
