<?php

namespace App\Http\Controllers;

use App\Models\TiposChamados;
use Illuminate\Http\Request;

class TiposChamadosController extends Controller
{
    /**
     * Exibir lista de tipos de chamados.
     */
    public function index()
    {
        $tiposchamados = TiposChamados::all();
        return view('tiposchamados.index', compact('tiposchamados'));
    }

    /**
     * Mostrar o formulário para criar um novo tipo de chamado.
     */
    public function create()
    {
        return view('tiposchamados.create');
    }

    /**
     * Armazenar um novo tipo de chamado no banco de dados.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|max:255',
            'observacoes' => 'nullable',
        ]);

        TiposChamados::create($request->all());
        return redirect('/tiposchamados')->with('success', 'Tipo de chamado cadastrado com sucesso!');
    }

    /**
     * Exibir um tipo de chamado específico.
     */
    public function show(string $id)
    {
        $tiposchamado = TiposChamados::findOrFail($id);
        return view('tiposchamados.show', compact('tiposchamado'));
    }

    /**
     * Mostrar o formulário para editar um tipo de chamado.
     */
    public function edit(string $id)
    {
        $tiposchamado = TiposChamados::findOrFail($id);
        return view('tiposchamados.edit', compact('tiposchamado'));
    }

    /**
     * Atualizar um tipo de chamado no banco de dados.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'descricao' => 'required|max:255',
            'observacoes' => 'nullable',
        ]);

        $tiposchamado = TiposChamados::findOrFail($id);
        $tiposchamado->update($request->all());
        return redirect('/tiposchamados')->with('success', 'Tipo de chamado atualizado com sucesso!');
    }

    /**
     * Remover um tipo de chamado do banco de dados.
     */
    public function destroy(string $id)
    {
        $tiposchamado = TiposChamados::findOrFail($id);
        $tiposchamado->delete();
        return redirect('/tiposchamados')->with('success', 'Tipo de chamado excluído com sucesso!');
    }
}
