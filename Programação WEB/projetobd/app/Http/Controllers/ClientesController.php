<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Exibir lista de clientes
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Exibir formulário de criação
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Armazenar cliente no banco de dados
     */
    public function store(Request $request)
    {
        
        
        Clientes::create($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Exibir formulário de edição
     */
    public function edit(Clientes $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Atualizar cliente no banco de dados
     */
    public function update(Request $request, Clientes $cliente)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'telefone' => 'required|max:15',
            'cpf' => 'required|size:11|unique:clientes,cpf,'.$cliente->id,
        ]);

        $cliente->update($validatedData);

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Excluir cliente
     */
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }


    public function show(string $id)
    {
        $cliente = Clientes::find($id);
        return view('clientes.show', compact('cliente'));
    }

}


