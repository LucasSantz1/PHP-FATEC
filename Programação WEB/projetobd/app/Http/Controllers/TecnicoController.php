<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Exibir lista de técnicos.
     */
    public function index()
    {
        $tecnicos = Tecnico::all();
        return view('tecnico.index', compact('tecnicos'));
    }

    /**
     * Mostrar o formulário para criar um novo técnico.
     */
    public function create()
    {
        return view('tecnico.create');
    }

    /**
     * Armazenar um novo técnico no banco de dados.
     */
    public function store(Request $request)
    {
        Tecnico::create($request->all());
        return redirect('/tecnico')->with('success', 'Técnico cadastrado com sucesso!');
    }

    /**
     * Exibir um técnico específico.
     */
    public function show(string $id)
    {
        $tecnico = Tecnico::findOrFail($id);
        return view('tecnico.show', compact('tecnico'));
    }

    /**
     * Mostrar o formulário para editar um técnico.
     */
    public function edit(string $id)
    {
        $tecnico = Tecnico::findOrFail($id);
        return view('tecnico.edit', compact('tecnico'));
    }

    /**
     * Atualizar um técnico no banco de dados.
     */
    public function update(Request $request, string $id)
    {
        $tecnico = Tecnico::findOrFail($id);
        $tecnico->update($request->all());
        return redirect('/tecnico')->with('success', 'Técnico atualizado com sucesso!');
    }

    /**
     * Remover um técnico do banco de dados.
     */
    public function destroy(string $id)
    {
        $tecnico = Tecnico::findOrFail($id);
        $tecnico->delete();
        return redirect('/tecnico')->with('success', 'Técnico excluído com sucesso!');
    }
}
