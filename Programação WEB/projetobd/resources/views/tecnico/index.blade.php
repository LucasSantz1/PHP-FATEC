
<x-app-layout>
    <div class="container mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-success btn-lg" href="{{ route('tecnico.index') }}">Gerenciar Técnicos</a>
            <a class="btn btn-success btn-lg" href="{{ route('tecnico.create') }}">Inserir Novo Técnico</a>
        </div>

        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Técnicos Cadastrados</h5>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($tecnico->isEmpty())
            <p class="text-center">Não há técnicos cadastrados.</p>
        @else
            <table class="table table-hover table-bordered text-center bg-light text-dark mt-4">
                <thead class="bg-secondary text-light">
                    <tr>
                        <th>Nome</th>
                        <th>Especialidade</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tecnico as $tecnico)
                        <tr>
                            <td>{{ $tecnico->nome }}</td>
                            <td>{{ $tecnico->especialidade }}</td>
                            <td>{{ $tecnico->email }}</td>
                            <td>{{ $tecnico->telefone }}</td>
                            <td>{{ $tecnico->ativo ? 'Sim' : 'Não' }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('tecnico.show', $tecnico->id) }}" class="btn btn-info mx-2">Ver</a>
                                <a href="{{ route('tecnico.edit', $tecnico->id) }}" class="btn btn-warning mx-2">Alterar</a>
                                <form action="{{ route('tecnico.destroy', $tecnico->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este técnico?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
