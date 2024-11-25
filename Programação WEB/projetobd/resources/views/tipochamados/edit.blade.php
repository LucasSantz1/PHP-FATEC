<x-app-layout>

    <h5>Alterar Cliente</h5>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/clientes/{{ $clientes->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $clientes->nome }}" required/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" name="cpf" class="form-control" value="{{ $clientes->cpf }}" required/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="telefone" class="form-label">Número:</label>
                <input type="text" name="telefone" class="form-control" value="{{ $clientes->telefone }}" required/>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </div>
    </form>

</x-app-layout>
