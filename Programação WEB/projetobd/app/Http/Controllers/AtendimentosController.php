<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atendimentos;
use App\Models\Clientes;
use App\Models\Tecnico;
use App\Models\TiposChamados;

class AtendimentosController extends Controller
{
    public function index()
    {
        $atendimentos = Atendimentos::with(['cliente', 'tecnico', 'tiposchamados'])->get();
        return view('atendimentos.index', compact('atendimentos'));
    }

    public function create()
    {
        $clientes = Clientes::all();
        $tecnicos = Tecnico::all();
        $tiposchamados = TiposChamados::all();
        return view('atendimentos.create', compact('clientes', 'tecnicos', 'tiposchamados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'tiposchamados_id' => 'required|exists:tiposchamados,id',
            'data_atendimento' => 'required|date',
        ]);

        Atendimentos::create($request->all());
        return redirect()->route('atendimentos.index')->with('success', 'Atendimento registrado com sucesso!');
    }

    public function show($id)
    {
        $atendimento = Atendimentos::with(['cliente', 'tecnico', 'tiposchamados'])->findOrFail($id);
        return view('atendimentos.show', compact('atendimento'));
    }

    public function edit($id)
    {
        $atendimento = Atendimentos::findOrFail($id);
        $clientes = Clientes::all();
        $tecnicos = Tecnico::all();
        $tiposchamados = TiposChamados::all();
        return view('atendimentos.edit', compact('atendimento', 'clientes', 'tecnicos', 'tiposchamados'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'tiposchamados_id' => 'required|exists:tiposchamados,id',
            'data_atendimento' => 'required|date',
        ]);

        $atendimento = Atendimentos::findOrFail($id);
        $atendimento->update($request->all());
        return redirect()->route('atendimentos.index')->with('success', 'Atendimento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $atendimento = Atendimentos::findOrFail($id);
        $atendimento->delete();
        return redirect()->route('atendimentos.index')->with('success', 'Atendimento excluído com sucesso!');
    }
}
