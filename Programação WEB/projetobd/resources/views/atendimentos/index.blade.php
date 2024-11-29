<x-app-layout>

    <div class="container mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-success btn-lg" href="{{ route('atendimentos.index') }}">Gerenciar Atendimentos</a>
            <a class="btn btn-success btn-lg" href="{{ route('atendimentos.create') }}">Inserir Novo Atendimento</a>
        </div>

        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Atendimentos Cadastrados</h5>

        <table class="table table-hover table-bordered text-center bg-light text-dark mt-4">
            <thead class="bg-secondary text-light">
                <tr>
                    <th>Cliente</th>
                    <th>Técnico</th>
                    <th>Tipo de Chamado</th>
                    <th>Data do Atendimento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($atendimentos as $atendimento)
                    <tr>
                        <td>{{ $atendimento->cliente->nome }}</td>
                        <td>{{ $atendimento->tecnico->nome }}</td>
                        <td>{{ $atendimento->tiposchamados->descricao }}</td>
                        <td>{{ \Carbon\Carbon::parse($atendimento->data_atendimento)->format('d/m/Y') }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('atendimentos.edit', $atendimento->id) }}" class="btn btn-warning mx-2">Alterar</a>
                            <form action="{{ route('atendimentos.destroy', $atendimento->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este atendimento?')">Excluir</button>
                            </form>
                            <a href="/atendimentos/{{$atendimento->id}}" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
