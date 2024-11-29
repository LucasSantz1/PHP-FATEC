<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Atendimentos;

class DashboardController extends Controller
{
    public function gerarGrafico()
    {
        $data = Atendimentos::select('tecnico_id', DB::raw('COUNT(*) as quantidade_atendimentos'))
                            ->with('tecnico') // Carrega o relacionamento com Técnico
                            ->groupBy('tecnico_id')
                            ->get();

        $tecnicos = [];
        $quantidades = [];

        foreach ($data as $linha) {
            $tecnicos[] = $linha->tecnico->nome;
            $quantidades[] = $linha->quantidade_atendimentos;
        }

        return view('dashboard', compact('tecnicos', 'quantidades'));
    }
}
