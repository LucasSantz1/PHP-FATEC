<x-app-layout>

    <h5 class="mt-3">Gerenciar Clientes</h5>

    <a class="btn btn-success" href="/clientes/create">
        Inserir novo cliente
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $c)
            <tr>
                <td>{{ $c->nome }}</td>
                <td>{{ $c->telefone }}</td>
                <td>{{ $c->cpf }}</td>
                <td>
                    <a href="/clientes/{{ $c->id }}/edit" class="btn btn-warning mx-2">Alterar</a>

                    <form action="/clientes/{{ $c->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mx-2">Excluir</button>
                    </form>

                    <a href="/clientes/{{$c->id}}" class="btn btn-info">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>