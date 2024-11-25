<x-app-layout>

    <h5>Excluir Clientes</h5>

    <form action="/clientes/" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do cliente:</label>
                <input type="text" name="nome" value="{{$cliente->nome}}" class="form-control" disabled/>
            </div>

            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone do cliente:</label>
                <input type="text" name="telefone" value="{{$cliente->telefone}}" class="form-control" disabled/>
            </div>

            <div class="col">
                <label for="cpf" class="form-label">Informe o CPF do cliente:</label>
                <input type="text" name="cpf" value="{{$cliente->cpf}}" class="form-control" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>