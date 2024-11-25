<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pedido;

class DashboardController extends Controller
{
    public function gerarGrafico()
    {
        $data = Pedido::select('mesa_id', DB::raw('COUNT(*) as quantidade_pedidos'))
                      ->with('mesa') 
                      ->groupBy('mesa_id')
                      ->get();

        $mesas = [];
        $quantidades = [];

        foreach ($data as $linha) {
            $mesas[] = $linha->mesa->numero;
            $quantidades[] = $linha->quantidade_pedidos;
        }
        return view('dashboard', compact('mesas', 'quantidades'));
    }
}