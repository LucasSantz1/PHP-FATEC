<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimentos extends Model
{
    use HasFactory;

    protected $table = 'atendimentos';

    protected $fillable = ['cliente_id', 'tecnico_id', 'tiposchamados_id', 'data_atendimento'];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function tecnico()
    {
        return $this->belongsTo(Tecnico::class, 'tecnico_id');
    }

    public function tiposchamados()
    {
        return $this->belongsTo(TiposChamados::class, 'tiposchamados_id');
    }
}
