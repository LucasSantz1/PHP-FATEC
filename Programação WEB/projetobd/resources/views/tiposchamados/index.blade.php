<x-app-layout>
    <div class="container mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-success btn-lg" href="{{ route('tiposchamados.index') }}">Gerenciar Tipos de Chamados</a>
            <a class="btn btn-success btn-lg" href="{{ route('tiposchamados.create') }}">Inserir Novo Tipo de Chamado</a>
        </div>

        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Tipos de Chamados Cadastrados</h5>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($tiposchamados->isEmpty())
            <p class="text-center">Não há tipos de chamados cadastrados.</p>
        @else
            <table class="table table-hover table-bordered text-center bg-light text-dark mt-4">
                <thead class="bg-secondary text-light">
                    <tr>
                        <th>Descrição</th>
                        <th>Observações</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tiposchamados as $tiposchamados)
                        <tr>
                            <td>{{ $tiposchamados->descricao }}</td>
                            <td>{{ $tiposchamados->observacoes ?? 'Sem observações' }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('tiposchamados.show', $tiposchamados->id) }}" class="btn btn-info mx-2">Ver</a>
                                <a href="{{ route('tiposchamados.edit', $tiposchamados->id) }}" class="btn btn-warning mx-2">Alterar</a>
                                <form action="{{ route('tiposchamados.destroy', $tiposchamados->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este tipo de chamado?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
