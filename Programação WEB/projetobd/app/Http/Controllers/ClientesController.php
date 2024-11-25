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
        return redirect("/clientes");
    }

    /**
     * Exibir cliente específico
     */
    public function show(string $id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Exibir formulário de edição
     */
    public function edit($id)
    {
        $clientes = Clientes::findOrFail($id);
        return view('clientes.edit', compact('clientes'));
    }
    

    /**
     * Atualizar cliente no banco de dados
     */
    public function update(Request $request, $id)
    {
        $clientes = Clientes::findOrFail($id);
        $clientes->update($request->all());
        return redirect('/clientes')->with('success', 'Cliente atualizado com sucesso!');
    }
    
    /**
     * Excluir cliente
     */
    public function destroy(string $id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->delete();
        return redirect("/clientes");
    }
}